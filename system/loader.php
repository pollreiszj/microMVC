<?php
class Loader {
	public static function execute($controllerName, $action, $args = NULL) {
		$class = $controllerName.'Controller';

		if (empty($controllerName) || !class_exists($class)) {
			$class = Config::get("error.controller").'Controller';
		}		
		$controller = new $class();		

		if (!is_callable(array($controller, $action))) {
			$action = Config::get("default.action");
		}

		call_user_func_array(array($controller, $action), $args);
	}
}