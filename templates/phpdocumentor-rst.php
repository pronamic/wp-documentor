<?php
/**
 * RestructuredText Template for phpDocumentor
 *
 * @link      https://docs.phpdoc.org/3.0/guide/internals/guides.html
 * @link      https://docutils.sourceforge.io/docs/user/rst/quickref.html
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

if ( ! isset( $documentor ) ) {
	return;
}

$eol = "\n";
$tab = "\t";

$hooks = $documentor->get_hooks();
$existing_hooks = array();

switch ( $documentor->type ) {
	case 'actions':
		$hooks = $documentor->get_actions();

		break;
	case 'filters':
		$hooks = $documentor->get_filters();

		break;
}

if ( 'actions' === $documentor->type ) {
	echo 'Actions', $eol;
	echo '=======' , $eol;
	echo $eol;
	echo $tab, 'Actions allow you to add data or change how WordPress operates. Callback functions for Actions will run at a specific point in the execution of WordPress, and can perform some kind of a task, like echoing output to the user or inserting something into the database. Actions do not return anything back to the calling hook.', $eol;
	echo $eol;
	echo 'https://developer.wordpress.org/plugins/hooks/actions/', $eol;
}

if ( 'filters' === $documentor->type ) {
	echo 'Filters', $eol;
	echo '=======' , $eol;
	echo $eol;
	echo $tab, 'Filters give you the ability to change data during the execution of WordPress. Callback functions for Filters will accept a variable, modify it, and return it. They are meant to work in an isolated manner, and should never have side effects such as affecting global variables and output. Filters expect to have something returned back to them.', $eol;
	echo $eol;
	echo 'https://developer.wordpress.org/plugins/hooks/filters/', $eol;
}

echo $eol;

foreach ( $hooks as $hook ) {
	$tag_name = $hook->get_tag()->get_name();
	
	if ( in_array( $hook->get_tag()->get_name(), $existing_hooks ) ) {
		continue;
	}
	$existing_hooks[] = $hook->get_tag()->get_name();

	echo $tag_name, $eol;
	echo str_repeat( '-', \strlen( $tag_name ) ), $eol;
	echo $eol;

	$summary = $hook->get_summary();

	if ( null !== $summary ) {
		echo '*', $summary, '*', $eol;
		echo $eol;
	}

	$description = $hook->get_description();

	if ( null !== $description ) {
		echo $description, $eol;
		echo $eol;
	}

	$arguments = $hook->get_arguments();

	if ( \count( $arguments ) > 0 ) {
		echo '+----------+------+-------------+', $eol;
		echo '| Argument | Type | Description |', $eol;
		echo '+==========+======+=============+', $eol;

		foreach ( $arguments as $argument ) {
			echo '| ', $argument->get_name(), ' | ', $argument->get_type(), ' | ', $argument->get_description(), ' |', $eol;
		}

		echo '+----------+------+-------------+', $eol;
		echo $eol;
	}
}
