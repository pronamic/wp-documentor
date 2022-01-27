<?php
/**
 * Argument
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

use phpDocumentor\Reflection\DocBlock\Tags\Param;
use PhpParser\Node\Arg;

/**
 * Argument
 *
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class Argument {
	/**
	 * PHP Parser argument object.
	 *
	 * @link https://github.com/nikic/PHP-Parser/blob/v4.10.4/lib/PhpParser/Node/Arg.php
	 * @var Arg
	 */
	private $arg;

	/**
	 * Parameter tag.
	 *
	 * @link https://github.com/phpDocumentor/ReflectionDocBlock/blob/5.2.2/src/DocBlock/Tags/Param.php
	 * @var Param|null
	 */
	private $param_tag;

	/**
	 * Construct hook argument.
	 *
	 * @param Arg $arg Argument.
	 */
	public function __construct( Arg $arg ) {
		$this->arg = $arg;
	}

	/**
	 * Get PHP Parser argument object.
	 *
	 * @return Arg
	 */
	public function get_php_parser_argument() {
		return $this->arg;
	}

	/**
	 * Get name.
	 *
	 * @return string
	 */
	public function get_name() {
		$pretty_printer = new \PhpParser\PrettyPrinter\Standard();

		return $pretty_printer->prettyPrint( array( $this->arg ) );
	}

	/**
	 * Get param tag.
	 *
	 * @return Param|null
	 */
	public function get_param_tag() {
		return $this->param_tag;
	}

	/**
	 * Set param tag.
	 *
	 * @param Param|null $param_tag Param tag.
	 */
	public function set_param_tag( Param $param_tag = null ) {
		$this->param_tag = $param_tag;
	}

	/**
	 * Get type,
	 *
	 * @link https://github.com/phpDocumentor/ReflectionDocBlock/blob/5.2.2/src/DocBlock/Tags/TagWithType.php#L27-L33
	 * @return string|null
	 */
	public function get_type() {
		if ( null === $this->param_tag ) {
			return null;
		}

		return \strval( $this->param_tag->getType() );
	}

	/**
	 * Get description.
	 *
	 * @link https://github.com/phpDocumentor/ReflectionDocBlock/blob/5.2.2/src/DocBlock/Tags/BaseTag.php#L40-L43
	 * @return string|null
	 */
	public function get_description() {
		if ( null === $this->param_tag ) {
			return null;
		}

		return \strval( $this->param_tag->getDescription() );
	}
}
