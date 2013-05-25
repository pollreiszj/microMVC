<?php
class Application {
	
	function __construct() {
	}

	function start() {
		echo "application started - ";
		echo Config::get("default.controller");
	}
}