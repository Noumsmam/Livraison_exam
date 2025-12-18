<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Statistiques des Livraisons</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>
    <h1>Statistiques des Livraisons</h1>

    <form method="GET" action="<?= BASE_URL ?>/statistiques">
        <label>Filtrer par période :</label>
        <select name="periode">
            <option value="jour">Jour</option>
            <option value="mois">Mois</option>
            <option value="annee">Année</option>
        </select>
        <button type="submit">Filtrer</button>
    </form>

    <h2>Résultats</h2>
    <table border="1">
        <thead>
            <tr>
                <th>Période</th>
                <th>Chiffre d'affaire total</th>
                <th>Coût revient total</th>
                <th>Bénéfice</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo "<tr>
                    <td>2025-12-17</td>
                    <td>50 000</td>
                    <td>20 000</td>
                    <td>30 000</td>
                  </tr>";
            echo "<tr>
                    <td>2025-12-16</td>
                    <td>30 000</td>
                    <td>10 000</td>
                    <td>20 000</td>
                  </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>
