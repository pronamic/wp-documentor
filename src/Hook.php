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

/**
 * Hook
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
abstract class Hook {
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
	public function __construct( $tag, $args = array() ) {
		$this->tag  = $tag;
		$this->args = $args;
	}

	/**
	 * Tag.
	 *
	 * @return string
	 */
	public function tag() {
		return $this->tag;
	}
}
