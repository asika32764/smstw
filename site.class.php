<?php
/**
 * Part of sms-official-site project.
 *
 * @copyright  Copyright (C) 2011 - 2015 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

/**
 * Class Site
 */
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

		$this->minify();

		$this->writeHtmlContents();
	}

	/**
	 * Minify CSS & JS
	 *
	 * @return void
	 */
	public function minify()
	{
		$cssDir = __DIR__ . '/css/';
		$jsDir = __DIR__ . '/js/';

		$css = array(
			$cssDir . 'lib.min.css',
			$cssDir . 'uikit.css',
			$cssDir . 'main.css',
		);

		$js = array(
			$jsDir . 'jquery.js',
			$jsDir . 'jquery-scrollspy.js',
			$jsDir . 'jquery.smooth-scroll.js',
			$jsDir . 'skrollr.js',
			$jsDir . 'uikit.js',
			$jsDir . 'gmap3.js',
			$jsDir . 'main.js',
		);

		$this->minifyCss($css, $cssDir . 'main.min.css');

		$this->minifyJs($js, $jsDir . 'main.min.js');
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
	 * minifyCss
	 *
	 * @param string[] $cssFilenames        Origin CSS filenames
	 * @param string   $minifiedCssFilename Minified CSS filename
	 *
	 * @return void
	 */
	public function minifyCss(array $cssFilenames, $minifiedCssFilename)
	{
		$css = '';

		foreach ($cssFilenames as $cssFilename)
		{
			$css .= file_get_contents($cssFilename) . "\n";
		}

		$css = Minify_CSS::minify($css);

		file_put_contents($minifiedCssFilename, $css);
	}

	/**
	 * minifyJs
	 *
	 * @param string[] $jsFilenames         Origin JS filenames
	 * @param string   $minifiedJsFilename  Minified JS filename
	 *
	 * @return void
	 */
	public function minifyJs(array $jsFilenames, $minifiedJsFilename)
	{
		$js = '';

		foreach ($jsFilenames as $jsFilename)
		{
			$js .= file_get_contents($jsFilename) . "\n";
		}

		$js = JSMinPlus::minify($js);

		file_put_contents($minifiedJsFilename, $js);
	}

	/**
	 * getHtmlContents
	 *
	 * @param array $data
	 *
	 * @return string
	 */
	public function getHtmlContents(array $data = array())
	{
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
		$data = array('debug' => false);

		// Only write production HTML contents
		$contents = self::getHtmlContents($data);

		file_put_contents(__DIR__ . '/index.html', $contents);
	}
}
