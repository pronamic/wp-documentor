<?php
/**
 * Namespace Resolver
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

/**
 * Namespace Resolver
 *
 * @link    https://github.com/nikic/PHP-Parser/blob/v4.10.4/doc/component/Name_resolution.markdown
 * @link    https://github.com/nikic/PHP-Parser/blob/v4.10.4/doc/component/Walking_the_AST.markdown
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class NamespaceResolver extends \PhpParser\NodeVisitorAbstract {
	/**
	 * Namespace.
	 *
	 * @var string|null
	 */
	public $namespace;

	/**
	 * Enter node.
	 *
	 * @param \PhpParser\Node $node Node.
	 */
	public function enterNode( \PhpParser\Node $node ) {
		if ( $node instanceof \PhpParser\Node\Stmt\Namespace_ ) {
			$this->namespace = \strval( $node->name );
		}

		if ( $node instanceof \PhpParser\Node\Expr\FuncCall ) {
			$node->setAttribute( 'namespace', $this->namespace );
		}
	}
}
