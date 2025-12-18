<?php
    namespace App\Models;
    use Flight;

    Class CalculModel {
        public function calculBeneficeLivraison($idLivraison) {
            $db = Flight::db();
            $cout = $db->preprare("SELECT cout_revient FROM livraison_livraison WHERE id = ?;");
            $cout->execute([$idLivraison]);
            $benefice=$db->prepare("SELECT chiffre_affaire FROM livraison_livraison WHERE id = ?;");
            $benefice->execute([$idLivraison]);
            $chiffreAffaire = $benefice->fetch() - $cout->fetch();
            return $chiffreAffaire; 
        } 
    }
?>