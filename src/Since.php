<?php
/**
 * Since
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

use phpDocumentor\Reflection\DocBlock\Tags\Since as PhpDocSince;

/**
 * Since
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class Since {
	/**
	 * Version.
	 *
	 * @var string
	 */
	private $version;

	/**
	 * Description.
	 *
	 * @var string|null
	 */
	private $description;

	/**
	 * Tag.
	 *
	 * @var PhpDocSince|null
	 */
	private $tag;

	/**
	 * Construct since object.
	 *
	 * @param string           $version     Version.
	 * @param string|null      $description Description.
	 * @param PhpDocSince|null $tag         Tag.
	 */
	public function __construct( $version, $description = null, $tag = null ) {
		$this->version     = $version;
		$this->description = $description;
		$this->tag         = $tag;
	}

	/**
	 * Get version.
	 *
	 * @return string
	 */
	public function get_version() {
		return $this->version;
	}

	/**
	 * Get description.
	 *
	 * @return string|null
	 */
	public function get_description() {
		return $this->description;
	}

	/**
	 * Get tag.
	 *
	 * @return PhpDocSince|null
	 */
	public function get_tag() {
		return $this->tag;
	}
}
