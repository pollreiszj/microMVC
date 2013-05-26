<?php
//Controller configurations
Config::setArray([
	'default.controller' => '',
	'default.action'	 => 'index',
	'error.controller'   => 'error'
]);

/*
 * Router::QUERYSTRING_PARSER - parse the route in querystring style
 *  controller/action?param1=val1&param2=val2
 *
 * Router::DIRECTORY_PARSER - parse the route in directory style
 *  controller/action/val21/val2
 * 
 * .htaccess
     <IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteBase /
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^(.*)$ /index.php [QSA,L]
        RedirectMatch 403 /\.git
     </IfModule>
 */
Config::set('route.parser', Router::QUERYSTRING_PARSER);