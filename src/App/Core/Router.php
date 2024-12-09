<?php

namespace App\Core;

class Router
{
	private $routes = [];

	public function add($method, $path, $callback)
	{
		$this->routes[] = [
			"method" => strtoupper($method),
			"path" => $path,
			"callback" => $callback,
		];
	}

	public function dispatch($requestUri, $requestMethod)
	{
		foreach ($this->routes as $route)
		{
			if ($route['method'] === strtoupper($requestMethod) && $route['path'] === $requestUri)
			{
				if (is_callable($route['callback']))
				{
					return call_user_func($route['callback']);
				} elseif (is_array($route['callback']))
				{
					[$controller, $method] = $route['callback'];
					$controller = new $controller();
					return $controller->$method();
				}
			}
		}
		http_response_code(404);
		echo "404 - Not found";
	}
}