<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller
{
	public function index()
	{
		$data = ["title" => "Bienvenue sur eCommerce"];
		$this->render("home/index", $data);
	}
}