<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Livraisons</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>


<div class="container">

    <h1>Livraisons en cours</h1>

    <div class="actions">
        <a href="<?= BASE_URL ?>/chauffeurs" class="btn">Afficher chauffeurs</a>
        <a href="<?= BASE_URL ?>/colis" class="btn">colis</a>
        <a href="<?= BASE_URL ?>/livraison/create" class="btn">Créer livraison</a>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>   
                <th>Statut</th>
                <th>Chiffre d'affaire</th>
                <th>Coût de revient</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>1</td>
                <td>2025-01-10</td>
                <td>En attente</td>
                <td>12000</td>
                <td>5000</td>
            </tr>

            <tr>
                <td>2</td>
                <td>2025-01-11</td>
                <td>En attente</td>
                <td>18000</td>
                <td>7000</td>
            </tr>

        </tbody>
    </table>

</div>

</body>
</html>
