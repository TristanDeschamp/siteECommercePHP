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
	<a href="/products">Retour à la liste des produits</a>
</body>
</html>