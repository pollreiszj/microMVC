<?php
class homeController extends Controller {
	public function index() {
		$data = [
			'title' => 'Home View',
			'message' => 'Hello from the home view'
		];			

		View::make('home', $data);
	}

	public function userlist() {
		$model = new userModel();		
		$data = [
			'title' => 'User List',
			'users' => $model->getUsers()
		];						
		View::make('users', $data);
	}

	public function user() {
		$model = new userModel();	
		$data = [
			'title' => 'User Detail',
			'user' => $model->getUser()
		];											
		View::make('userdetail', $data);					
	}
}