<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Véhicules</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>
    <h1>Créer un Véhicule</h1>

    <form method="POST" action="<?= BASE_URL ?>/vehicule/create">
        <label>Immatriculation :</label>
        <input type="text" name="immatriculation" required><br><br>

        <label>Modèle :</label>
        <input type="text" name="modele" required><br><br>

        <label>Coût de revient :</label>
        <input type="number" step="0.01" name="cout_revient" required><br><br>

        <button type="submit">Créer Véhicule</button>
    </form>

    <h2>Liste des Véhicules</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Immatriculation</th>
                <th>Modèle</th>
                <th>Coût de revient</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo "<tr>
                    <td>1</td>
                    <td>1234-TAA</td>
                    <td>Sprinter</td>
                    <td>5000</td>
                  </tr>";
            echo "<tr>
                    <td>2</td>
                    <td>5678-TBB</td>
                    <td>Suzuki</td>
                    <td>7000</td>
                  </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>
