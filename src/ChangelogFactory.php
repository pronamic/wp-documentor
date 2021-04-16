<?php
/**
 * Changelog Factory
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

use phpDocumentor\Reflection\DocBlock as PhpDocBlock;
use phpDocumentor\Reflection\DocBlock\Tags\Since as PhpDocSince;
/**
 * Changelog Factory
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class ChangelogFactory {
	/**
	 * Create changelog from doc block.
	 *
	 * @param PhpDocBlock $doc_block Doc block from phpDocumentor.
	 * @return Changelog
	 */
	public function create( PhpDocBlock $doc_block ) {
		/**
		 * Get the since tags from the doc block.
		 */
		$tags = $doc_block->getTagsByName( 'since' );

		/**
		 * The since tags can be invalid, we filter these out.
		 *
		 * @link https://github.com/phpDocumentor/ReflectionDocBlock/blob/5.2.2/src/DocBlock/Tags/InvalidTag.php
		 */
		$tags = \array_filter(
			$tags,
			function( $tag ) {
				return $tag instanceof PhpDocSince;
			}
		);

		/**
		 * Sort since tags, older versions first.
		 */
		\usort(
			$tags,
			function( $tag_a, $tag_b ) {
				return -\version_compare( $tag_a->getVersion(), $tag_b->getVersion() );
			}
		);

		/**
		 * Changelog.
		 */
		$changelog = new Changelog();

		foreach ( $tags as $tag ) {
			$item = new Since(
				$tag->getVersion(),
				$tag->getDescription(),
				$tag
			);

			$changelog->add_item( $item );
		}

		return $changelog;
	}
}
