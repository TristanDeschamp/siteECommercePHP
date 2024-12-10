<?php

namespace App\Controller;

use App\Core\Controller;

class ProductController extends Controller
{
	public function list()
	{
		$products = [
			["id" => 1, "name" => "Produit 1", "price" => 10.99],
			["id" => 2, "name" => "Produit 2", "price" => 15.49],
			["id" => 3, "name" => "Produit 3", "price" => 20.00],
		];

		$this->render("product/list", ["products" => $products]);
	}

	public function detail($id)
	{
		$product = [
			"id" => $id,
			"name" => "Produit " . $id,
			"description" => "Description du produit " . $id,
			"price" => 10.99 * $id,
		];

		$this->render("product/detail", ["product" => $product]);
	}
}