<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $product["name"] ?></title>
</head>
<body>
	<h1><?= $product["name"] ?></h1>
	<p><?= $product["description"] ?></p>
	<p>Prix : <?= number_format($product["price"], 2) ?> €</p>

	<form action="/cart/add" method="POST">
		<input type="hidden" name="product_id" value="<?= $product['id'] ?>">
		<label for="quantity">Quantité :</label>
		<input type="number" name="quantity" id="quantity" value="1" min="1">
		<button type="submit">Ajouter au panier</button>
	</form>
	<a href="/products">Retour à la liste des produits</a>
</body>
</html>