<?php
class View {

	private $view;
	private $data = [];

	public function __construct($view = NULL) {
		if (!is_null($view)) {
			$this->view = $view;
		}
	}

	public function setView ($view) {
		$this->view = $view;
	}

	public function assign($name, $value) {
		$this->data[$name] = $value;
	}

	public function assignArray($array) {
		if (is_array($array)) {
			foreach ($array as $key => $value) {
				$this->assign($key, $value);
			}
		}
	}

	public function render() {
		extract($this->data, EXTR_OVERWRITE);
		include path('app').'view'.DS.$this->view.'.view'.EXT;
	}
	

	public static function make($view, $data = NULL) {
		$view = new View($view);

		if (!is_null($data)) {
			$view->assignArray($data);
		}

		$view->render();		
	}

	public static function AsJSON($data, $forceObject = false) {
		header('Content-type: application/json');		
		echo json_encode($data, ($forceObject ? JSON_FORCE_OBJECT : 0));		
	}
}