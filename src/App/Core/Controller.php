<?php

namespace App\Core;

class Controller
{
	protected function render($view, $data = [])
	{
		extract($data);
		require __DIR__ . "/../../View/$view.php";
	}
}