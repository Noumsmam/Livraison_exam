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
        <thead>
            <tr>
                <th>ID</th>
                <th>Poids (kg)</th>
                <th>Description</th>
                <th>Valeur par kg</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo "<tr>
                    <td>1</td>
                    <td>10</td>
                    <td>Colis fragile</td>
                    <td>500</td>
                  </tr>";
            echo "<tr>
                    <td>2</td>
                    <td>5</td>
                    <td>Colis standard</td>
                    <td>300</td>
                  </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>
