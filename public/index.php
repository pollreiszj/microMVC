<?php
error_reporting(E_ALL);
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