<?php
//Controller configurations
Config::set('default.controller', 'index');
Config::set('default.action', 'index');
Config::set('error.controller', 'error404');

/*
 * With this disabled the route would be in querystring style
 *  controller/action?param1=val1&param2=val2
 *
 * With thie enabled the route would be in directory style
 *  controller/action/val21/val2
 * 
 * .htaccess
     <IfModule mod_rewrite.c>
        RewriteEngine On
        RewriteBase /
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteRule ^(.*)$ /index.php [QSA,L]
        RedirectMatch 403 /\.svn
     </IfModule>
 */
Config::set('urls.seofriendly', true);