<?php

require __DIR__ . '/site.class.php';

$site = new Site;

$site->deploy();

$env   = array_key_exists('env',   $_GET) ? $_GET['env']          : 'dev';
$debug = array_key_exists('debug', $_GET) ? (bool) $_GET['debug'] : true;

echo $site->getHtmlContents($env, $debug);
