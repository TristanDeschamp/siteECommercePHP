<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
</head>
<body>
    <h1>Checkout</h1>
    <h2>Résumé de votre commande</h2>
    <ul>
        <?php foreach ($cart as $productId => $quantity): ?>
            <li>Produit ID : <?= $productId ?> - Quantité : <?= $quantity ?></li>
        <?php endforeach; ?>
    </ul>
    <form action="/checkout/submit" method="POST">
        <h2>Informations client</h2>
        <label for="name">Nom :</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email :</label>
        <input type="email" name="email" id="email" required>
        <br>
        <button type="submit">Confirmer la commande</button>
    </form>
</body>
</html>