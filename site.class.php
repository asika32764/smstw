<?php
/**
 * Part of sms-official-site project.
 *
 * @copyright  Copyright (C) 2011 - 2015 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

require_once __DIR__ . '/lessphp/lessc.inc.php';

class Site
{
	/**
	 * Deploy html files
	 *
	 * @return void
	 */
	public function deploy()
	{
		$this->compileLess(__DIR__ . '/less/main.less', __DIR__ . '/css/main.css');
		$this->writeHtmlContents();
	}

	/**
	 * compileLess
	 *
	 * @param string $lessFilename
	 * @param string $cssFilename
	 *
	 * @return void
	 */
	public function compileLess($lessFilename, $cssFilename)
	{
		$less = new lessc;

		$less->checkedCompile($lessFilename, $cssFilename);
	}

	/**
	 * getHtmlContents
	 *
	 * @param  string  $env    Deploy environment
	 * @param  bool    $debug  Weather to enable debug mode
	 *
	 * @return  string
	 */
	public function getHtmlContents($env, $debug)
	{
		$env = in_array($env, array('prod', 'dev')) ? $env : 'prod';
		$debug = (bool) $debug;

		ob_start();

		include __DIR__ . '/tmpl/index.php';

		$contents = ob_get_contents();

		ob_end_clean();

		return $contents;
	}

	/**
	 * writeHtmlContents
	 *
	 * @return void
	 */
	public function writeHtmlContents()
	{
		// Only write production HTML contents
		$contents = self::getHtmlContents('prod', false);

		file_put_contents(__DIR__ . '/index.html', $contents);
	}
}
