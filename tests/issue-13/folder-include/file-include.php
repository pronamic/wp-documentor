<?php
/**
 * Test for issue 13.
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

/**
 * Test function for filter assigned to a variable.
 *
 * @param string $first_param This is the first argument.
 * @param string $second_param This is the second argument.
 * @return string
 */
function test_issue_13_folder_include_1( $first_param, $second_param ) {
	/**
	 * My plugin filter assigned to a variable
	 *
	 * @param string $first_param This is the first argument.
	 * @param string $second_param This is the second argument.
	 */
	$some_variable = apply_filters( 'test_issue_13_folder_include_1', $first_param, $second_param );

	return $some_variable;
}

/**
 * Test function for filter directly returned.
 *
 * @param string $first_param This is the first argument.
 * @param string $second_param This is the second argument.
 * @return string
 */
function test_issue_13_folder_include_2( $first_param, $second_param ) {
	/**
	 * My plugin filter directly returned
	 *
	 * @param string $first_param This is the first argument.
	 * @param string $second_param This is the second argument.
	 */
	return apply_filters( 'test_issue_13_folder_include_2', $first_param, $second_param );
}
