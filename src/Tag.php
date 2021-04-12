<?php
/**
 * Tag
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

/**
 * Tag
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class Tag {
	/**
	 * Tag.
	 *
	 * @var string
	 */
	private $tag;

	/**
	 * Construct hook.
	 *
	 * @param string $tag Tag.
	 */
	public function __construct( $arg ) {
		$this->arg = $arg;
	}

	public function get_name() {
		$printer = new TagPrinter();

		return $printer->print( $this->arg->value );
	}
}
