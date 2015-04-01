<?php
/**
 * Part of sms-official-site project.
 *
 * @copyright  Copyright (C) 2011 - 2015 SMS Taiwan, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE
 */

// Enable Debug
$debug = 1;

require __DIR__ . '/lessphp/lessc.inc.php';

$lessFilename = __DIR__ . '/less/main.less';
$cssFilename = __DIR__ . '/css/main.css';

$less = new lessc;
$less->checkedCompile($lessFilename, $cssFilename);

ob_start();

include __DIR__ . '/index.php';

$contents = ob_get_contents();

ob_end_clean();

file_put_contents(__DIR__ . '/index.html', $contents);

echo $contents;
