<?php

function test_issue_10_prefix_1( $first_param, $second_param ) {
	/**
	 * Prefix 1.
	 *
	 * @param string $first_param This is the first argument
	 * @param string $second_param This is the second argument
	 */
	return apply_filters( 'prefix_1_filter', $first_param, $second_param );
}

function test_issue_10_prefix_2( $first_param, $second_param ) {
	/**
	 * Prefix 2.
	 *
	 * @param string $first_param This is the first argument
	 * @param string $second_param This is the second argument
	 */
	return apply_filters( 'prefix_2_filter', $first_param, $second_param );
}

function test_issue_10_prefix_3( $first_param, $second_param ) {
	/**
	 * Prefix 3.
	 *
	 * @param string $first_param This is the first argument
	 * @param string $second_param This is the second argument
	 */
	return apply_filters( 'prefix_3_filter', $first_param, $second_param );
}
