<?php
Class Config {
	public static function set($index, $value) {
		$GLOBALS['config'][$index] = $value;
	}

	public static function setArray($array) {
		if (is_array($array)) {
			foreach ($array as $key => $value) {
				self::set($key, $value);
			}
		}
	}

	public static function get($index) {
		return $GLOBALS['config'][$index];
	}

	public static function has($index) {
		return isset($GLOBALS['config'][$index]);
	}
}