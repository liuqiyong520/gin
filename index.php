<?php
// Version
define('VERSION', '3.0.3.3');

// Configuration
if (is_file('config.php')) {
	require_once('config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

// Startup
require_once(DIR_SYSTEM . 'startup.php');
header('Access-Control-Allow-Origin:*');
header("Access-Control-Allow-Methods: POST, GET");
header("Access-Control-Allow-Headers: content-type, x-requested-with");

function pp($arr){
	echo '<pre>';
	print_r($arr);
	echo '</pre>';
}
start('catalog');