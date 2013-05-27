<?php
class userModel extends DbModel {

	public function getUser() {
		$user = [
			'fullname' => 'jeff pollreisz', 
			'username' => 'pollreiszj',
			'email'    => 'jeffpollreisz@gmail.com',
			'birthday' => '5/3/1985'
		];

		return (object)$user;
	}

	public function getUsers() {
		$users = [
			['fullname' => 'jeff pollreisz', 'username' => 'pollreiszj'],
			['fullname' => 'john doe', 'username' => 'doe.john'],
			['fullname' => 'jane doe', 'username' => 'doe.jane']
		];

		return $users;
	}
}