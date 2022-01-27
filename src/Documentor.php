<?php
/**
 * Documentor
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

use PhpParser\Node;
use PhpParser\NodeFinder;
use PhpParser\NodeTraverser;
use PhpParser\ParserFactory;
use PhpParser\NodeVisitor\NodeConnectingVisitor;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Documentor
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class Documentor {
	/**
	 * Hooks.
	 *
	 * @var Hook[]
	 */
	private $hooks;

	/**
	 * Construct documentor.
	 */
	public function __construct() {
		$this->hooks = array();
	}

	/**
	 * Get hooks.
	 *
	 * @return array
	 */
	public function get_hooks() {
		return $this->hooks;
	}

	/**
	 * Get actions.
	 *
	 * @return array
	 */
	public function get_actions() {
		return \array_filter(
			$this->hooks,
			function( $hook ) {
				return $hook->is_action();
			}
		);
	}

	/**
	 * Get filters.
	 *
	 * @return array
	 */
	public function get_filters() {
		return \array_filter(
			$this->hooks,
			function( $hook ) {
				return $hook->is_filter();
			}
		);
	}

	/**
	 * Get relative path.
	 *
	 * @param \SplFileInfo $file File.
	 * @return string
	 */
	public function relative( \SplFileInfo $file ) {
		$filesystem = new Filesystem();

		$end   = $file;
		$start = new \SplFileInfo( $this->relative );

		return \trim( $filesystem->makePathRelative( $end->getRealPath(), $start->getRealPath() ), '/' );
	}

	/**
	 * Parse.
	 *
	 * @throws \Exception Throws exception when parsing fails.
	 * @param \SplFileInfo $file File.
	 */
	public function parse( $file ) {
		$parser_factory = new ParserFactory();

		$parser = $parser_factory->create( ParserFactory::PREFER_PHP7 );

		$node_finder = new NodeFinder();

		$traverser = new NodeTraverser();

		$traverser->addVisitor( new NodeConnectingVisitor() );
		$traverser->addVisitor( new NamespaceResolver() );

		$tag_printer = new TagPrinter();

		$changelog_factory = new ChangelogFactory();

		/**
		 * File.
		 */
		$contents = $file->getContents();

		$statements = $parser->parse( $contents );

		$statements = $traverser->traverse( $statements );

		$statements = $node_finder->find(
			$statements,
			function( Node $node ) {
				if ( ! $node instanceof Node\Expr\FuncCall ) {
					return false;
				}

				/**
				 * Function call can be a name or an expression, for example: `$callback()`.
				 *
				 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Expr/FuncCall.php#L10-L11
				 */
				if ( ! $node->name instanceof Node\Name ) {
					return false;
				}

				return \in_array(
					\strval( $node->name ),
					array(
						'apply_filters',
						'apply_filters_ref_array',
						'apply_filters_deprecated',
						'do_action',
						'do_action_ref_array',
						'do_action_deprecated',
					),
					true
				);
			}
		);

		foreach ( $statements as $statement ) {
			$tag_arg = \array_shift( $statement->args );

			if ( null === $tag_arg ) {
				throw new \Exception( 'Tag argument missing from hook call.' );
			}

			try {
				$tag_name = $tag_printer->print( $tag_arg->value );
			} catch ( \Exception $exception ) {
				throw new \Exception(
					\sprintf(
						'Could not convert tag argument value to a name in %s.',
						$file . '#' . $statement->getStartLine()
					),
					0,
					$exception
				);
			}

			if ( ! is_null( $this->prefix ) ) {
				$pattern = sprintf( '/^(%s)/', implode( '|', explode( ',', $this->prefix ) ) );
				preg_match( $pattern, $tag_name, $matches );

				if ( empty( $matches ) ) {
					continue;
				}
			}

			$tag = new Tag( $tag_name, $tag_arg );

			$doc_comment = $statement->getDocComment();

			if ( null === $doc_comment ) {
				$previous = $statement->getAttribute( 'previous' );

				if ( null !== $previous ) {
					$doc_comment = $previous->getDocComment();
				}
			}

			$arguments = array();

			foreach ( $statement->args as $arg ) {
				$argument = new Argument( $arg );

				$arguments[] = $argument;
			}

			$hook = new Hook( $file, $statement, $tag, $arguments );

			$hook->set_doc_comment( $doc_comment );

			$doc_block = $hook->get_doc_block();

			if ( null !== $doc_block ) {
				$hook->set_changelog( $changelog_factory->create( $doc_block ) );

				foreach ( $hook->get_arguments() as $argument ) {
					$arg = $argument->get_php_parser_argument();

					$param_tags = \array_filter(
						$doc_block->getTagsByName( 'param' ),
						function( $tag ) use ( $arg ) {
							/**
							 * Documentor can only match named expression to a tag, currently no support for:
							 *
							 * ```php
							 * do_action_ref_array( $hook, $v['args'] );
							 * ```
							 *
							 * @link https://github.com/WordPress/WordPress/blob/5.7/wp-cron.php#L129-L138
							 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Expr/ArrayDimFetch.php
							 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Expr/Variable.php#L9-L10
							 */
							if ( ! \property_exists( $arg->value, 'name' ) ) {
								return false;
							}

							return $tag->getVariableName() === $arg->value->name;
						}
					);

					$param_tag = \reset( $param_tags );

					if ( false !== $param_tag ) {
						$argument->set_param_tag( $param_tag );
					}
				}
			}

			$this->hooks[] = $hook;
		}
	}
}
