<?php
/**
 * Part of sms-official-site project.
 *
 * @copyright  Copyright (C) 2011 - 2015 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

require __DIR__ . '/lessphp/lessc.inc.php';

class Site
{
	/**
	 * Deploy html files
	 *
	 * @param  string  $env    Deploy environment
	 * @param  bool    $debug  Weather to enable debug mode
	 *
	 * @return string         Index Html contents
	 */
	public static function deploy($env, $debug)
	{
		$env = in_array($env, array('prod', 'dev')) ? $env : 'prod';
		$debug = (bool) $debug;

		self::compileLess();

		ob_start();

		include __DIR__ . '/tmpl/index.php';

		$contents = ob_get_contents();

		ob_end_clean();

		file_put_contents(__DIR__ . '/index.html', $contents);

		return $contents;
	}

	/**
	 * compileLess
	 *
	 * @return void
	 */
	protected static function compileLess()
	{
		$lessFilename = __DIR__ . '/less/main.less';
		$cssFilename = __DIR__ . '/css/main.css';

		$less = new lessc;

		$less->checkedCompile($lessFilename, $cssFilename);
	}
}
