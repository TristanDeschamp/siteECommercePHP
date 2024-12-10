<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Liste des produits</title>
</head>
<body>
	<h1>Liste des produits</h1>
	<ul>
		<?php foreach ($products as $product): ?>
			<li>
				<a href="/product/<?= $product["id"] ?>">
					<?= $product["name"] ?> - <?= number_format($product["price"], 2) ?> €
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</body>
</html>