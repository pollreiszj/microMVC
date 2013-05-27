<?php
class userModel extends DbModel {

	public function getUser() {
		$user = [
			'name' => 'jeff',
			'email' => 'jeffpollreisz@gmail.com'
		];

		return (object)$user;
	}
}