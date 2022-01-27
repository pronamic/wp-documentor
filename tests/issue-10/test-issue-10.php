<?php
/**
 * Test for pull request 10.
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

/**
 * Test function for prefix 1.
 *
 * @param string $first_param This is the first argument.
 * @param string $second_param This is the second argument.
 * @return string
 */
function test_issue_10_prefix_1( $first_param, $second_param ) {
	/**
	 * Prefix 1.
	 *
	 * @param string $first_param This is the first argument
	 * @param string $second_param This is the second argument
	 */
	return apply_filters( 'prefix_1_filter', $first_param, $second_param );
}

/**
 * Test function for prefix 2.
 *
 * @param string $first_param This is the first argument.
 * @param string $second_param This is the second argument.
 * @return string
 */
function test_issue_10_prefix_2( $first_param, $second_param ) {
	/**
	 * Prefix 2.
	 *
	 * @param string $first_param This is the first argument
	 * @param string $second_param This is the second argument
	 */
	return apply_filters( 'prefix_2_filter', $first_param, $second_param );
}

/**
 * Test function for prefix 3.
 *
 * @param string $first_param This is the first argument.
 * @param string $second_param This is the second argument.
 * @return string
 */
function test_issue_10_prefix_3( $first_param, $second_param ) {
	/**
	 * Prefix 3.
	 *
	 * @param string $first_param This is the first argument
	 * @param string $second_param This is the second argument
	 */
	return apply_filters( 'prefix_3_filter', $first_param, $second_param );
}
