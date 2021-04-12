<?php
/**
 * Test Class
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

/**
 * Test Class
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class TestClass {
	/**
	 * Test.
	 */
	public function test() {
		$test = $this;

		/**
		 * Test action.
		 *
		 * @param TestClass $test Test object.
		 */
		\do_action( 'test', $test );
	}
}
