<?php
class defaultController extends Controller {
	public function index() {
		echo "this is the default controller";
	}

	public function something() {
		echo "this is the something action";
	}

	public function users() {
		$model = new userModel();				
		print_r($model->getUser());					
	}
}