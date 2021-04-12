<?php
/**
 * Default Template
 *
 * @link      https://github.com/themeblvd/hookster
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

if ( ! isset( $documentor ) ) {
	return;
}

$hooks = $documentor->get_hooks();

$pretty_printer = new \PhpParser\PrettyPrinter\Standard();

foreach ( $hooks as $hook ) {
	echo $hook->get_file(), '#L', $hook->get_start_line(), '-', $hook->get_end_line(), PHP_EOL;
	echo $pretty_printer->prettyPrintExpr( $hook->get_call() ), PHP_EOL;
	echo $hook->get_tag()->get_name(), PHP_EOL;
	echo $hook->get_summary(), PHP_EOL;

	foreach ( $hook->get_arguments() as $argument ) {
		echo ' - ', $argument->get_name(), ': ', $argument->get_type(), ': ', $argument->get_description(), PHP_EOL;
	}

	echo PHP_EOL;
}
