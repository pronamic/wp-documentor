<?php
/**
 * Test for issue 16.
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

/**
 * Test issue 16
 */
$test = apply_filters(
	'dynamic-filter-' . strval( 'test' ),
	'test'
);

class Test {
	public function get_value() {
		return 'test';
	}

	public function test() {
		return apply_filters( 'dynamic-filter-' . $this->get_value() );
	}
}
