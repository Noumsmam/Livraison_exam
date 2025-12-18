<?php
    namespace App\Models;
    use Flight;

    Class StatModel {
        public function calculBeneficeParJour() {
            $db = Flight::db();
            $STMT = $db->prepare("
                SELECT date_livraison, SUM(chiffre_affaire) AS benefice
                FROM livraison_livraison
                GROUP BY date_livraison;
            ");
            $STMT->execute();
            return $STMT->fetchAll(PDO::FETCH_ASSOC);
        }

    }
?>