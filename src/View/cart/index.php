<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre panier</title>
</head>
<body>
    <h1>Votre panier</h1>
    <?php if (empty($cart)): ?>
        <p>Votre panier est vide.</p>
        <a href="/products">Voir les produits</a>
    <?php else: ?>
        <ul>
            <?php foreach ($cart as $productId => $quantity): ?>
                <li>
                    Produit ID : <?= $productId ?> - Quantité : <?= $quantity ?>
                    <form action="/cart/remove" method="POST" style="display:inline;">
                        <input type="hidden" name="product_id" value="<?= $productId ?>">
                        <button type="submit">Retirer</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="/products">Continuer vos achats</a>
    <?php endif; ?>
</body>
</html>