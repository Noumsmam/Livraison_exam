<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Livraison</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>
    <h1>Connexion Livraison</h1>
    <form method="POST" action="<?= BASE_URL ?>/login">
        <label>Login :</label>
        <input type="text" name="login" required><br><br>

        <label>Mot de passe :</label>
        <input type="password" name="pwd" required><br><br>

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
