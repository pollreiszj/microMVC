<?php
Class Config {
	public static function set($index, $value) {
		$GLOBALS['config'][$index] = $value;
	}

	public static function get($index) {
		return $GLOBALS['config'][$index];
	}
}
?>
