<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/site.class.php';

$minify = array_key_exists('minify', $_GET) ? (bool) $_GET['minify'] : false;
$debug = array_key_exists('debug', $_GET) ? (bool) $_GET['debug'] : true;

$site = new Site($environment, $debug);

$site->deploy();

if ($minify)
{
	$site->minify();
}

$data = array('debug' => $debug);

echo $site->getHtmlContents($data);
