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

use PhpParser\Node\Arg;

/**
 * Tag
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class Tag {
	/**
	 * Name.
	 *
	 * @var string
	 */
	private $name;

	/**
	 * Argument.
	 *
	 * @var Arg
	 */
	private $arg;

	/**
	 * Construct hook.
	 *
	 * @param string $name Name.
	 * @param Arg    $arg  Argument.
	 */
	public function __construct( $name, Arg $arg ) {
		$this->name = $name;
		$this->arg  = $arg;
	}

	/**
	 * Get name.
	 *
	 * @return string
	 */
	public function get_name() {
		return $this->name;
	}
}
