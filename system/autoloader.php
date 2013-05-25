<?php
class autoloader {

    public static $loader;

    public static function init()
    {
        if (self::$loader == NULL)
            self::$loader = new self();

        return self::$loader;
    }

    private function __construct()
    {
        spl_autoload_register(array($this,'system'));
        spl_autoload_register(array($this,'controller'));
        spl_autoload_register(array($this,'model'));
    }

    private function system($class)
    {
        set_include_path(path('sys'));
        spl_autoload_extensions('.php');
        spl_autoload($class);
    }

    private function controller($class)
    {
        $class = preg_replace('/_controller$/ui','',$class);
        
        set_include_path(path('app').'/controller/');
        spl_autoload_extensions('.controller.php');
        spl_autoload($class);
    }

    private function model($class)
    {
        $class = preg_replace('/_model$/ui','',$class);
        
        set_include_path(path('app').'/model/');
        spl_autoload_extensions('.model.php');
        spl_autoload($class);
    }
}