<?php

namespace App\Controller;

use App\Core\Controller;

class CheckoutController extends Controller
{
	public function index()
	{
		if (!isset($_SESSION))
		{
			session_start();
		}

		$cart = $_SESSION["cart"] ?? [];
		if (empty($cart))
		{
			header("Location: /cart");
			exit;
		}

		$this->render("checkout/index", ["cart" => $cart]);
	}

	public function submit()
	{
		if (!isset($_SESSION))
		{
			session_start();
		}

		$cart = $_SESSION["cart"] ?? [];
		if (empty($cart))
		{
			header("Location: /cart");
			exit;
		}

		$_SESSION["cart"] = [];
		header("Location: /checkout/success");
	}

	public function success()
	{
		$this->render("checkout/success");
	}
}