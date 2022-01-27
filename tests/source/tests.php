<?php
/**
 * Test Class
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
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
	 * Dummy property.
	 *
	 * @var string
	 */
	private $dummy = '';

	/**
	 * Test namespace argument.
	 */
	public function test_namespace_argument() {
		$test = $this;

		/**
		 * Test action.
		 *
		 * @param TestClass $test Test object.
		 */
		\do_action( 'test', $test );
	}

	/**
	 * Dummy function.
	 *
	 * @return string
	 */
	public function dummy() {
		return '';
	}

	/**
	 * Test tag with method call.
	 */
	public function test_tag_with_method_call() {
		$dummy = $this->dummy();

		/**
		 * Test tag with method call.
		 *
		 * @param TestClass $test Test object.
		 */
		\do_action( 'test_' . $dummy, $test );
	}

	/**
	 * Test tag with var and underscores in markdown.
	 */
	public function test_tag_with_var_and_underscores_in_markdown() {
		$from = 'pending';
		$to   = 'completed';

		/**
		 * Test tag with var and underscores in markdown.
		 *
		 * @param TestClass $test Test object.
		 */
		\do_action( 'test_' . $from . '_to_' . $to, $test );
	}

	/**
	 * Test property fetch.
	 */
	public function test_property_fetch() {
		/**
		 * Test tag with property fetch.
		 *
		 * @param TestClass $test Test object.
		 */
		\do_action( 'test_' . $this->dummy, $test );
	}

	/**
	 * Test since tag.
	 */
	public function test_since_tag() {
		$test = $this;

		/**
		 * Test tag with property fetch.
		 *
		 * @since 1.0.0 Introduced.
		 * @since 1.0.1 Improved documentation.
		 *
		 * @param TestClass $test Test object.
		 */
		\do_action( 'test_since', $test );
	}
}
