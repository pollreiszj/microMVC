<?php
class router {

	const QUERYSTRING_PARSER = 1;
	const DIRECTORY_PARSER = 2;

	private $controller;
	private $action;
	private $args = [];

	public function __construct() {
		$uri = Request::getRequestURI();
		$uri = trim(trim($uri), "/");

		if (!empty($uri)) {
			$parser = Config::get("route.parser");
			if ($parser === self::QUERYSTRING_PARSER) {
				$this->parseQueryStringRoute($uri);
			}
			else if ($parser === self::DIRECTORY_PARSER) {
				$this->parseDirectoryRoute($uri);
			}
			else {
				$this->controller = Config::get("error.controller");
			}
		}
	}

	public function getController() {
		if (empty($this->controller)) {			
			$this->controller = Config::get("default.controller");			
		}	
		return $this->controller;
	}

	public function setController($controller) {
		$this->controller = $controller;
	}

	public function getAction() {
		if (empty($this->action)) {
			$this->action = Config::get("default.action");
		}
		return $this->action;
	}

	public function setAction($action) {
		$this->action = $action;
	}

	public function getArgs() {
		return $this->args;
	}

	public function setArgs($args) {
		if (is_array($args)) {
			$this->args = $args;
		}
	}

	private function parseQueryStringRoute($route) {		
		if (strlen($route) > 1) {
			$parts = explode('/', $route);
			$this->controller = $parts[0];

			if (strpos($route, '/') > 0) {
				$actionparts = explode('?', $parts[1]);
				$this->action = $actionparts[0];

				parse_str(Request::getQueryString(), $this->args);
			}
		}
	}

	private function parseDirectoryRoute($route) {
		$parts = explode('/', $route);

		foreach ($parts as $key => $val) {
			if ($key == 0) {
				$this->controller = $val;
			} 
			else if ($key == 1) {
				$this->action = $val;
			}  
			else {
				$this->args[$key] = $val;
			}
		}
	}
}