<?php

echo '### `', $hook->get_tag()->get_name(), '`', $eol;
echo $eol;

$summary = $hook->get_summary();

if ( ! empty( $summary ) ) {
	echo '*', $summary, '*', $eol;
	echo $eol;
}

$description = $hook->get_description();

if ( ! empty( $description ) ) {
	echo $description, $eol;
	echo $eol;
}

$arguments = $hook->get_arguments();

if ( \count( $arguments ) > 0 ) {
	echo '**Arguments**', $eol;

	echo $eol;

	echo 'Argument | Type | Description', $eol; 
	echo '-------- | ---- | -----------', $eol;

	foreach ( $arguments as $argument ) {
		$type = $argument->get_type();

		\printf(
			'%s | %s | %s',
			\sprintf( '`%s`', $argument->get_name() ),
			empty( $type ) ? '' : \sprintf( '`%s`', \addcslashes( $type, '|' ) ),
			strtr(
				\addcslashes( $argument->get_description(), '|' ),
				array(
					"\r\n" => '<br>',
					"\r"   => '<br>',
					"\n"   => '<br>',
				)
			)
		);

		echo $eol;
	}
}

echo $eol;

/**
 * Changelog.
 *
 * @link https://developer.wordpress.org/reference/hooks/activated_plugin/#changelog
 * @link https://github.com/phpDocumentor/ReflectionDocBlock/blob/5.2.2/src/DocBlock/Tags/Since.php
 */
$changelog = $hook->get_changelog();

if ( \count( $changelog ) > 0 ) {
	echo '**Changelog**', $eol;

	echo $eol;

	echo 'Version | Description', $eol; 
	echo '------- | -----------', $eol;

	foreach ( $changelog as $item ) {
		\printf(
			'%s | %s',
			\sprintf( '`%s`', $item->version ),
			$item->description
		);

		echo $eol;
	}

	echo $eol;
}

printf(
	'Source: %s, %s',
	\sprintf(
		'[%s](%s)',
		$hook->get_file()->getPathname(),
		$documentor->relative( $hook->get_file() )
	),
	\sprintf(
		'[line %s](%s)',
		$hook->get_start_line(),
		\sprintf(
			'%s#L%d-L%d',
			$documentor->relative( $hook->get_file() ),
			$hook->get_start_line(),
			$hook->get_end_line()
		)
	)
);

echo $eol;
echo $eol;
