<?php
class userModel extends DbModel {

	public function getUser($id) {
		$stmt = $this->db->prepare("SELECT * FROM user WHERE id=:id");
		$stmt->bindParam(':id', $id);
		$stmt->execute();
		$obj = $stmt->fetch(PDO::FETCH_OBJ);

		return $obj;
	}

	public function getUsers() {
		$stmt = $this->db->query("SELECT id, name, username FROM user");		
		$arr = $stmt->fetchAll(PDO::FETCH_ASSOC);		
	
		return $arr;
	}
}