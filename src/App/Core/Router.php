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
			$pattern = preg_replace("/\{[a-zA-Z0-9_]+\}/", "([a-zA-Z0-9_]+)", $route['path']);
			$pattern = "#^" . $pattern . "$#";

			if ($route['method'] === strtoupper($requestMethod) && preg_match($pattern, $requestUri, $matches))
			{
				array_shift($matches);
				if (is_callable($route['callback']))
				{
					return call_user_func_array($route['callback'], $matches);
				} elseif (is_array($route['callback']))
				{
					[$controller, $method] = $route['callback'];
					$controller = new $controller();
					return call_user_func_array([$controller, $method], $matches);
				}
			}
		}
		http_response_code(404);
		echo "404 - Non-trouvée";
	}
}