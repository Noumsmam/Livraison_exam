<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer Livraison</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>
    <h1>Créer une Livraison</h1>

    <form method="POST" action="<?= BASE_URL ?>/livraison/create">
        <label>Colis :</label>
        <select name="colis_id" required>
            <option value="1">Colis 1</option>
            <option value="2">Colis 2</option>
        </select><br><br>

        <label>Chauffeur :</label>
        <select name="chauffeur_id" required>
            <option value="1">Rakotobe Samoelina</option>
            <option value="2">Zanaka Jean Paul</option>
        </select><br><br>

        <label>Véhicule :</label>
        <select name="vehicule_id" required>
            <option value="1">1234-TAA Sprinter</option>
            <option value="2">5678-TBB Suzuki</option>
        </select><br><br>

        <label>Adresse de destination :</label>
        <input type="text" name="adresse_destination" required><br><br>

        <label>Statut :</label>
        <select name="statut" required>
            <option value="en_attente">En attente</option>
            <option value="livre">Livré</option>
            <option value="annule">Annulé</option>
        </select><br><br>

        <button type="submit">Créer Livraison</button>
    </form>

    <h2>Liste des livraisons</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Colis</th>
                <th>Chauffeur</th>
                <th>Véhicule</th>
                <th>Destination</th>
                <th>Statut</th>
                <th>Date</th>
                <th>Coût revient</th>
                <th>Chiffre affaire</th>
            </tr>
        </thead>
        <tbody>
            <?php
            echo "<tr>
                    <td>1</td>
                    <td>Colis 1</td>
                    <td>Rakotobe Samoelina</td>
                    <td>1234-TAA Sprinter</td>
                    <td>Andoharanofotsy</td>
                    <td>En attente</td>
                    <td>".date('Y-m-d')."</td>
                    <td>5000</td>
                    <td>11000</td>
                  </tr>";
            ?>
        </tbody>
    </table>
</body>
</html>
