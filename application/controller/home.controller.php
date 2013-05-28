<?php
class homeController extends Controller {
	public function index() {
		$data = [
			'title' => 'Home View',
			'message' => 'Hello from the home view'
		];			

		View::make('home', $data);
	}

	public function users() {
		$model = new userModel();		
		$data = [
			'title' => 'User List',
			'users' => $model->getUsers()
		];						
		View::make('users', $data);
	}

	public function usersjson() {
		$model = new userModel();				
		View::AsJSON($model->getUsers());
	}

	public function userdetail($id) {
		$model = new userModel();	
		$data = [
			'title' => 'User Detail',
			'user' => $model->getUser($id)
		];											
		View::make('userdetail', $data);					
	}
}