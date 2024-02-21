<?php
/**
 * Test for issue 18.
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

/**
 * Test issue 18.
 * 
 * @link https://github.com/pronamic/wp-documentor/issues/17
 * @param bool  $some_condition       Condition.
 * @param mixed $some_other_parameter Other parameter.
 * @return bool
 */
if ( apply_filters( 'some_condition_filter', $some_condition, $some_other_parameter ) ) {
    do_something();
}
