<?php
/**
 * Markdown Template
 *
 * @link      https://guides.github.com/features/mastering-markdown/
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

if ( ! isset( $documentor ) ) {
	return;
}

$actions = $documentor->get_actions();
$filters = $documentor->get_filters();

$eol = "\n";

echo '# Hooks', $eol;

echo $eol;

echo '## Actions', $eol;

echo $eol;

if ( empty( $actions ) ) {
	echo '*This project does not contain any WordPress actions.*';
} else {
	foreach ( $actions as $hook ) {
		include __DIR__ . '/parts/markdown-hook.php';
	}
}

echo '## Filters', $eol;

echo $eol;

if ( empty( $filters ) ) {
	echo '*This project does not contain any WordPress filters.*';
} else {
	foreach ( $filters as $hook ) {
		include __DIR__ . '/parts/markdown-hook.php';
	}
}
