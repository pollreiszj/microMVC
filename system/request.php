<?php
class Request {

	private function __construct() {
	}
		
	public static function server($param) {
		return $_SERVER[$param];
	}
	
	public static function get($param) {
		return $_GET[$param];		
	}
	
	public static function post($param) {
		return $_POST[$param];
	}
	
	public static function files() {
		return $_FILES;
	}
	
	public static function getRequestMethod() {
		return self::server('REQUEST_METHOD');
	}
	
    
	public static function getRequestURI() {
		return self::server('REQUEST_URI');
	}

	public static function getQueryString() {
		return self::server('QUERY_STRING');
	}		
}