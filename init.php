<?php
defined('SMS_SITE') or die;

// Debug
$debug = 0;


// LESS
if(0) :
    require "lessphp/lessc.inc.php";
    
    $path = 'less/main.less';
    $file  = 'css/main.css';
    
    if(file_exists($file)) {
        unlink($file);
    }
    
    $less = new lessc;
    $less->checkedCompile($path, $file);
endif;

// Animation
$namespace = array(
    'begin'     => 0,
    'add'       => 0,
    'duration'  => 70,
    'current'   => 1,
);

$animStart = function(&$namespace)
{
    if(empty($namespace['current'])) $namespace['current'] = 1 ;
    
    return $namespace['begin'] + (($namespace['current'] - 1) * $namespace['add']);
};

$animEnd   = function(&$namespace)
{
    $r = $namespace['begin'] + (($namespace['current'] - 1) * $namespace['add']) + $namespace['duration'];
    
    $namespace['current']++;
    
    return $r ;
};