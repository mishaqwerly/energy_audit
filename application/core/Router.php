<?php 


class Router 
{
	private $routes;
	
	function __construct()
	{
		require_once 'application/config/Routes.php';
		$this->routes = $routes; 
	}

	private function getUri()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
			return trim(($_SERVER['REQUEST_URI']), '/');
		}
	}

	public function run()
	{
		$uri = $this->getUri();
		foreach ($this->routes as $pattern => $path) {

			if (preg_match("~$pattern~", $uri)) {

				$internalPath = preg_replace("~$pattern~", $path, $uri);
				$segment = explode('/', $internalPath);
				$controllerName = ucfirst(array_shift($segment)).'Controller';
				$actionName = 'action'.ucfirst(array_shift($segment));
				$params = array_shift($segment);
				$controllerFile = 'application/controllers/'.$controllerName.'.php';


				if (file_exists($controllerFile)) {
					require $controllerFile;
					$controllerObj = new $controllerName;
					if (method_exists($controllerObj, $actionName)) {
						$result = $controllerObj->$actionName($params);
						if ($result != null) {
							break;
						}
					} else {
						require 'application/views/404.php';
					}
				} 
			} 
		}
	}
}