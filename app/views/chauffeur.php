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
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Salaire par livraison</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo "<tr>
                    <td>1</td>
                    <td>Rakotobe</td>
                    <td>Samoelina</td>
                    <td>15000</td>
                  </tr>";
            echo "<tr>
                    <td>2</td>
                    <td>Zanaka</td>
                    <td>Jean Paul</td>
                    <td>12000</td>
                  </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>
