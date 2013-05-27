<?php
class Application {

	public function start() {
		$router = new Router();

		Loader::execute($router->getController(),
						$router->getAction(),
						$router->getArgs());
	}
}