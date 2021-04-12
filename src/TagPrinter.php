<?php
/**
 * Tag Printer
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

/**
 * Tag Printer
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class TagPrinter {
	public function print( \PhpParser\Node\Expr $expr ) {
		/**
		 * String.
		 *
		 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Scalar/String_.php
		 */
		if ( $expr instanceof \PhpParser\Node\Scalar\String_ ) {
			return $expr->value;
		}

		/**
		 * Contat.
		 *
		 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Expr/BinaryOp/Concat.php
		 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Expr/BinaryOp.php
		 */
		if ( $expr instanceof \PhpParser\Node\Expr\BinaryOp\Concat ) {
			return $this->print( $expr->left ) . $this->print( $expr->right );
		}

		/**
		 * Variable.
		 *
		 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Expr/Variable.php
		 */
		if ( $expr instanceof \PhpParser\Node\Expr\Variable ) {
			return '{$' . $expr->name . '}';
		}

		/**
		 * Encapsed.
		 *
		 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Scalar/Encapsed.php
		 */
		if ( $expr instanceof \PhpParser\Node\Scalar\Encapsed ) {
			return implode( '', \array_map(
				__METHOD__,
				$expr->parts
			) );
		}

		/**
		 * Encapsed String Part.
		 *
		 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Scalar/EncapsedStringPart.php
		 */
		if ( $expr instanceof \PhpParser\Node\Scalar\EncapsedStringPart ) {
			return $expr->value;
		}

		/**
		 * Unsupported expression.
		 *
		 * @link https://github.com/nikic/PHP-Parser/blob/master/doc/component/Pretty_printing.markdown
		 */
		$pretty_printer = new \PhpParser\PrettyPrinter\Standard();

		throw new \Exception(
			\sprintf(
				'Not supported hook tag expression `%s`: %s.',
				\get_class( $expr ),
				$pretty_printer->prettyPrintExpr( $expr )
			)
		);
	}
}
