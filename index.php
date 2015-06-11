<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/site.class.php';

$debug = array_key_exists('debug', $_GET) ? (bool) $_GET['debug'] : true;

$site = new Site();

$site->deploy();

$data = array('debug' => $debug);

echo $site->getHtmlContents($data);
