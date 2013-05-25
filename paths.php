<?php

// The path to the application directory.
$paths['app'] = 'application';


// The path to the System directory.
$paths['sys'] = 'system';


// The path to the storage directory.
$paths['storage'] = 'storage';


// The path to the public directory.
$paths['public'] = 'public';


// Change to the current working directory.
chdir(__DIR__);


// Define the directory separator for the environment.
if ( ! defined('DS'))
{
	define('DS', DIRECTORY_SEPARATOR);
}

// Define the path to the base directory.
$GLOBALS['app_paths']['base'] = __DIR__.DS;


// Define each constant if it hasn't been defined.
foreach ($paths as $name => $path)
{
	if ( ! isset($GLOBALS['app_paths'][$name]))
	{
		$GLOBALS['app_paths'][$name] = realpath($path).DS;
	}
}

function path($path)
{
	return $GLOBALS['app_paths'][$path];
}

function set_path($path, $value)
{
	$GLOBALS['app_paths'][$path] = $value;
}