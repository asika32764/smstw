<?php

require "lessc.inc.php";

$less = new lessc;

$path = $argv[1];
$file = $argv[2];

$less->checkedCompile($path, $file);