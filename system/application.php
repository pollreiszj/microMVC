<?php
class Application {

	private $database;
	
	public function __construct() {
	}

	public function getDatabase() {
		return $database;
	}

	public function start() {
		$router = new Router();

		if (Config::has('database.name')) {
			try {
				$database = new DbConnection();
			}
			catch (PDOException $ex) {
				echo "Error connecting to database"; //set error controller
				$router->setController(Config::get("error.controller"));
			}
		}
						
		Loader::execute($router->getController(),
						$router->getAction(),
						$router->getArgs());
	}
}