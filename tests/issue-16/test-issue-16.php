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
	'dynamic-filter-' . php_sapi_name(),
	php_sapi_name()
);
