<?php
    if(isset($error)){
        echo $error;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Chauffeurs</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>
    <h1>Créer un Chauffeur</h1>

    <form method="POST" action="<?= BASE_URL ?>/chauffeur/create">
        <label>Nom :</label>
        <input type="text" name="nom" required><br><br>

        <label>Prénom :</label>
        <input type="text" name="prenom" required><br><br>

        <label>Salaire par livraison :</label>
        <input type="number" step="0.01" name="salaire_par_livraison" required><br><br>

        <button type="submit">Créer Chauffeur</button>
    </form>

    <h2>Liste des Chauffeurs</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Salaire par livraison</th>
        </tr>
        <?php foreach($chauffeur as $row) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['salaire_par_livraison']; ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
