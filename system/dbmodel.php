<?php
class DbModel extends Model {
	
	protected $db;

	public function __construct() {
		parent::__construct();
		$this->ConnectDatabase();		
	}	

	public function ConnectDatabase() {
		if (Config::has('database.name')) {
			try {
				$this->db = new DbConnection();
			}
			catch (PDOException $ex) {				
				throw new Exception("Error connecting to database");
			}
		}
	}

}