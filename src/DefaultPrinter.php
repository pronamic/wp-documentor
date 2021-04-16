<?php
/**
 * Default Printer
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2021 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Helper\Table;

/**
 * Default Printer
 *
 * @link    https://symfony.com/doc/current/components/console/helpers/table.html
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class DefaultPrinter {
	/**
	 * Constrcuct default printer.
	 *
	 * @param Documentor      $documentor Documentor.
	 * @param OutputInterface $output     Output.
	 */
	public function __construct( Documentor $documentor, OutputInterface $output ) {
		$this->documentor = $documentor;
		$this->output     = $output;

		$this->table = new Table( $output );

		$this->table->setHeaders( array( 'File', 'Tag' ) );

		foreach ( $documentor->get_hooks() as $hook ) {
			$this->table->addRow(
				array(
					$hook->get_file()->getPathname(),
					$hook->get_tag()->get_name(),
				)
			);
		}
	}

	/**
	 * Render.
	 *
	 * @return void
	 */
	public function render() {
		$this->table->render();
	}
}
