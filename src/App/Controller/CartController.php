<?php

namespace App\Controller;

use App\Core\Controller;

class CartController extends Controller
{
	private $cart = [];

	public function __construct()
	{
		if (!isset($_SESSION))
		{
			session_start();
		}
		$this->cart = &$_SESSION["cart"];
		if (!isset($this->cart))
		{
			$this->cart = [];
		}
	}

	public function index()
	{
		$this->render("cart/index", ["cart" => $this->cart]);
	}

	public function add()
	{
		$productId = $_POST["product_id"] ?? null;
		$quantity = $_POST["quantity"] ?? 1;

		if ($productId)
		{
			if (isset($this->cart[$productId]))
			{
				$this->cart[$productId] += $quantity;
			} else {
				$this->cart[$productId] = $quantity;
			}
		}

		header("Location: /cart");
	}

	public function remove()
	{
		$productId = $_POST["product_id"] ?? null;

		if ($productId && isset($this->cart[$productId]))
		{
			unset($this->cart[$productId]);
		}

		header("Location: /cart");
	}
}