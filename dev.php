<?php

require __DIR__ . '/deploy.php';

$site = new Site;

echo $site->deploy('dev', true);
