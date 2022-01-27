<?php

function test_issue_11_option_1( $first_param, $second_param ) {
	/**
	 * My plugin filter assigned to a variable
	 *
	 * @param string $first_param This is the first argument
	 * @param string $second_param This is the second argument
	 */
	$some_variable = apply_filters( 'my_plugin_filter_1', $first_param, $second_param );

	return $some_variable;
}

function test_issue_11_option_2( $first_param, $second_param ) {
	/**
	 * My plugin filter directly returned
	 *
	 * @param string $first_param This is the first argument
	 * @param string $second_param This is the second argument
	 */
	return apply_filters( 'my_plugin_filter_2', $first_param, $second_param );
}
