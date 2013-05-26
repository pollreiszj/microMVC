<?php
class DbConnection extends PDO {

	private $databaseName;

	public function __construct($db = NULL) {
		$this->databaseName = is_null($db) ? Config::get('database.name') : $db;
		parent::__construct($this->getDataSourceName(), 
							Config::get('database.username'), 
							Config::get('database.password'), 
	    	                array(
		    	            	PDO::ATTR_PERSISTENT => true,
        	    	        	PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        	        	    ));    	                                         
	}

	private function getDataSourceName() {
	    $driver = Config::get('database.driver');
	    switch($driver) 
	    {
	    	case 'mysql':
	    		return $this->mysqlDSN(Config::get('database.host'), 
	    								$this->databaseName);
	    	case 'sqlite':
	    		return $this->sqliteDSN($this->databaseName);
	    	default:
	    		return '';
	    }		
	}

	private function mysqlDSN($host, $name) {
		return sprintf("mysql:host=%s;dbname=%s", 
	    	            Config::get('database.host'),
	        	        Config::get('database.name'));
	}

	private function sqliteDSN($database) {
		return sprintf("sqlite:%s%s",
						path('storage'),
						$database);
	} 
}