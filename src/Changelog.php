<?php
/**
 * Changelog
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

use ArrayIterator;
use Countable;
use IteratorAggregate;

/**
 * Changelog
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class Changelog implements IteratorAggregate, Countable {
	/**
	 * Items.
	 *
	 * @var Since[]
	 */
	private $items;

	/**
	 * Construct changelog.
	 */
	public function __construct() {
		$this->items = array();
	}

	/**
	 * Get first version.
	 *
	 * @link https://stackoverflow.com/a/35599573
	 * @return Since|null
	 */
	public function get_first() {
		return \array_reduce(
			$this->items,
			function( $carry, $item ) {
				if ( null === $carry ) {
					return $item;
				}

				return \version_compare( $carry->get_version(), $item->get_version(), '<' ) ? $carry : $item;
			}
		);
	}

	/**
	 * Add item.
	 *
	 * @param Since $item Item.
	 */
	public function add_item( Since $item ) {
		$this->items[] = $item;
	}

	/**
	 * Count.
	 *
	 * @return int
	 */
	public function count() {
		return \count( $this->items );
	}

	/**
	 * Get iterator.
	 *
	 * @return \ArrayIterator
	 */
	public function getIterator() {
		return new ArrayIterator( $this->items );
	}
}
