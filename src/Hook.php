<?php
/**
 * Hook
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

use Symfony\Component\Finder\SplFileInfo;

/**
 * Hook
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class Hook {
	/**
	 * File.
	 *
	 * @link https://symfony.com/doc/current/components/finder.html
	 * @var SplFileInfo
	 */
	private $file;

	/**
	 * Function call.
	 *
	 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Expr/FuncCall.php
	 * @var \PhpParser\Node\Expr\FuncCall
	 */
	private $call;

	/**
	 * Tag.
	 *
	 * @var string
	 */
	private $tag;

	/**
	 * Doc comment.
	 *
	 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Comment/Doc.php
	 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Comment.php
	 * @var \PhpParser\Comment\Doc|null
	 */
	private $doc_comment;

	/**
	 * Doc block.
	 *
	 * @link https://github.com/phpDocumentor/ReflectionDocBlock/blob/5.2.2/src/DocBlock.php
	 * @var \phpDocumentor\Reflection\DocBlock|null
	 */
	private $doc_block;

	/**
	 * Construct hook.
	 *
	 * @param SplFileInfo $file      File.
	 * @param \PhpParser\Node\Expr\FuncCall $call      Function call.
	 * @param Tag                           $tag       Tag.
	 * @param Argument[]                    $arguments Arguments.
	 */
	public function __construct( $file, $call, $tag, $arguments = array() ) {
		$this->file      = $file;
		$this->call      = $call;
		$this->tag       = $tag;
		$this->arguments = $arguments;
	}

	/**
	 * Get file.
	 *
	 * @return SplFileInfo
	 */
	public function get_file() {
		return $this->file;
	}

	/**
	 * Get call.
	 *
	 * @return \PhpParser\Node\Expr\FuncCall
	 */
	public function get_call() {
		return $this->call;
	}

	/**
	 * Get tag.
	 *
	 * @return Tag
	 */
	public function get_tag() {
		return $this->tag;
	}

	/**
	 * Get doc comment.
	 *
	 * @return \PhpParser\Comment\Doc|null
	 */
	public function get_doc_comment() {
		return $this->doc_comment;
	}

	/**
	 * Set doc comment.
	 *
	 * @param \PhpParser\Comment\Doc|null 
	 */
	public function set_doc_comment( \PhpParser\Comment\Doc $doc_comment = null ) {
		$this->doc_comment = $doc_comment;

		if ( null !== $doc_comment ) {
			$doc_block_factory = \phpDocumentor\Reflection\DocBlockFactory::createInstance();

			$contextFactory = new \phpDocumentor\Reflection\Types\ContextFactory();

			$context = $contextFactory->createForNamespace( \strval( $this->call->getAttribute( 'namespace' ) ), $this->file->getContents() );

			$this->doc_block = $doc_block_factory->create( \strval( $doc_comment ), $context );
		}
	}

	/**
	 * Get doc block.
	 *
	 * @return \phpDocumentor\Reflection\DocBlock|null
	 */
	public function get_doc_block() {
		return $this->doc_block;
	}

	/**
	 * Get start line.
	 *
	 * @return int
	 */
	public function get_start_line() {
		if ( null === $this->doc_comment ) {
			return $this->call->getStartLine();
		}

		return \min( $this->doc_comment->getStartLine(), $this->call->getStartLine() );
	}

	/**
	 * Get end line.
	 *
	 * @return int
	 */
	public function get_end_line() {
		return $this->call->getEndLine();
	}

	/**
	 * Get summary.
	 *
	 * @return string|null
	 */
	public function get_summary() {
		if ( null === $this->doc_block ) {
			return null;
		}

		return $this->doc_block->getSummary();
	}

	/**
	 * Get description.
	 *
	 * @return string|null
	 */
	public function get_description() {
		if ( null === $this->doc_block ) {
			return null;
		}

		return $this->doc_block->getDescription()->getBodyTemplate();
	}

	/**
	 * Is filter.
	 *
	 * @return bool True if is filter, false otherwise.
	 */
	public function is_filter() {
		return \in_array(
			\strval( $this->call->name ),
			array(
				'apply_filters',
				'apply_filters_ref_array',
				'apply_filters_deprecated',
			),
			true
		);
	}

	/**
	 * Is action.
	 *
	 * @return bool True if is action, false otherwise.
	 */
	public function is_action() {
		return \in_array(
			\strval( $this->call->name ),
			array(
				'do_action',
				'do_action_ref_array',
				'do_action_deprecated',
			),
			true
		);
	}

	/**
	 * Is deprecated.
	 *
	 * @return bool True if is deprecated, false otherwise.
	 */
	public function is_deprecated() {
		return \in_array(
			\strval( $this->call->name ),
			array(
				'do_action_deprecated',
				'apply_filters_deprecated',
			),
			true
		);
	}

	/**
	 * Tag.
	 *
	 * @return string
	 */
	public function tag() {
		return $this->tag;
	}

	/**
	 * Arguments.
	 *
	 * @return array
	 */
	public function get_arguments() {
		return $this->arguments;
	}

	/**
	 * Changelog.
	 *
	 * @link https://developer.wordpress.org/reference/hooks/activated_plugin/#changelog
	 * @link https://github.com/phpDocumentor/ReflectionDocBlock/blob/5.2.2/src/DocBlock/Tags/Since.php
	 *
	 * @return array
	 */
	public function get_changelog() {
		$doc_block = $this->get_doc_block();

		if ( null === $doc_block ) {
			return array();
		}

		/**
		 * Get the since tags from the doc block.
		 */
		$tags = $doc_block->getTagsByName( 'since' );

		/**
		 * The since tags can be invalid, we filter these out.
		 *
		 * @link https://github.com/phpDocumentor/ReflectionDocBlock/blob/5.2.2/src/DocBlock/Tags/InvalidTag.php
		 */
		$tags = \array_filter(
			$tags,
			function( $tag ) {
				return $tag instanceof \phpDocumentor\Reflection\DocBlock\Tags\Since;
			}
		);

		/**
		 * Sort since tags, older versions first.
		 */
		\usort( $tags, function( $tag_a, $tag_b ) {
			return -\version_compare( $tag_a->getVersion(), $tag_b->getVersion() );
		} );

		/**
		 * Changelog.
		 */
		$changelog = array();

		foreach ( $tags as $tag ) {
			$changelog[] = (object) array(
				'version'     => $tag->getVersion(),
				'description' => $tag->getDescription(),
				'tag'         => $tag,
			);
		}

		return $changelog;
	}
}
