<?php
error_reporting(E_ALL);
define('EXT', '.php');

// set paths
require '../paths'.EXT;

// intialize the autoloader
require path('sys').'autoloader'.EXT;
autoloader::init();

// load up application config
include path('app').'config/config'.EXT;

// start the application
(new Application())->start();