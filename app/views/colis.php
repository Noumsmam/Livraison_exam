<?php
    if(isset($error)){
        echo $error;
    }
    if(isset($colis)){
        // var_dump($colis);
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Colis</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>
    <h1>Créer un Colis</h1>

    <form method="POST" action="<?= BASE_URL ?>/colis/create">
        <label>Poids (kg) :</label>
        <input type="number" step="0.01" name="poids_kg" required><br><br>

        <label>Description :</label>
        <input type="text" name="description" required><br><br>

        <label>Valeur par kg :</label>
        <input type="number" step="0.01" name="valeur_par_kg" required><br><br>

        <button type="submit">Créer Colis</button>
    </form>

    <h2>Liste des Colis</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Poids (kg)</th>
            <th>Description</th>
            <th>Valeur par kg</th>
        </tr>
        <?php foreach($colis as $row){ ?>
            <tr>
                <td><?php echo $row['id'] ;?></td>
                <td><?php echo $row['description'] ;?></td>
                <td><?php echo $row['poids_kg'] ;?></td>
                <td><?php echo $row['valeur_par_kg'] ;?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
