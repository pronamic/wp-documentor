<?php
/**
 * Hookster Printer
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

use JsonSerializable;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Hookster Printer
 *
 * @link    https://github.com/themeblvd/hookster
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class HooksterPrinter implements JsonSerializable {
	/**
	 * Constrcuct Hookster printer.
	 *
	 * @param Documentor $documentor Documentor.
	 * @param string     $type       Type.
	 */
	public function __construct( Documentor $documentor, OutputInterface $output, $type ) {
		$this->documentor = $documentor;
		$this->output     = $output;
		$this->type       = $type;
	}

	/**
	 * Get the hooks to print.
	 *
	 * @return array
	 */
	public function get_hooks() {
		switch ( $this->type ) {
			case 'actions':
				return $this->documentor->get_actions();
			case 'filters':
				return $this->documentor->get_filters();
			default:
				return array();
		}
	}

	/**
	 * JSON Serialize.
	 *
	 * @return array
	 */
	public function jsonSerialize() {
		$data = array();

		$hooks = $this->get_hooks();

		foreach ( $hooks as $hook ) {
			$params = array();

			foreach ( $hook->get_arguments() as $argument ) {
				$params[] = (object) array(
					'name'        => $argument->get_name(),
					'type'        => $argument->get_type(),
					'description' => $argument->get_description(),
				);
			}

			$item = (object) array(
				'name'    => $hook->get_tag()->get_name(),
				'summary' => $hook->get_summary(),
				'desc'    => $hook->get_description(),
				'since'   => $hook->get_since_version(),
				'params'  => $params,
				'file'    => $hook->get_file()->getPathname(),
			);

			$data[] = $item;
		}

		return $data;
	}

	/**
	 * Render.
	 *
	 * @return void
	 */
	public function render() {
		$this->output->writeln( \json_encode( $this, \JSON_PRETTY_PRINT ) );
	}
}
