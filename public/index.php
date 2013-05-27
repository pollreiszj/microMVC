<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//TODO: Move this somewhere else, separate php file?
function defaultExceptionHandler($exception) {
	echo "<pre>" .
	     $exception->getMessage() .
	     "<br/><br/>" .
	     $exception->getFile().' ('.$exception->getLine().')' .
	     "<br/>" .
	     $exception->getTraceAsString() .
	     "</pre>";
}
set_exception_handler("defaultExceptionHandler");

define('EXT', '.php');

// set the paths
require '../paths'.EXT;

// intialize the autoloader
require path('sys').'autoloader'.EXT;
autoloader::init();

// load up the config files
include path('app').'config/application.config'.EXT;
include path('app').'config/database.config'.EXT;

// start the application
(new Application())->start();