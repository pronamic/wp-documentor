<?php
/**
 * Template Printer
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2022 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Documentor
 */

namespace Pronamic\WordPress\Documentor;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * Template Printer
 *
 * @link    https://symfony.com/doc/current/components/console/helpers/table.html
 * @author  Remco Tolsma
 * @version 1.0.0
 * @since   1.0.0
 */
class TemplatePrinter {
	/**
	 * Documentor.
	 * 
	 * @var Documentor
	 */
	public $documentor;

	/**
	 * Output.
	 * 
	 * @var OutputInterface
	 */
	public $output;

	/**
	 * Template file.
	 * 
	 * @var string
	 */
	public $template;

	/**
	 * Constrcuct default printer.
	 *
	 * @param Documentor      $documentor Documentor.
	 * @param OutputInterface $output     Output.
	 * @param string          $template   Template file.
	 */
	public function __construct( Documentor $documentor, OutputInterface $output, $template ) {
		$this->documentor = $documentor;
		$this->output     = $output;
		$this->template   = $template;
	}

	/**
	 * Render.
	 *
	 * @return void
	 */
	public function render() {
		$documentor = $this->documentor;

		\ob_start();

		include $this->template;

		$output = \ob_get_clean();

		$this->output->writeln( $output );
	}
}
