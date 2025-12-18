<?php
    namespace App\Controllers;
    use Flight;
    use app\models\ColisModel;

    Class ColisController {
        public function createColis(){
            $desc=$_POST['description'] ?? '';
            $poid=$_POST['poids_kg'] ?? '';
            $valeur=$_POST['valeur_par_kg'] ?? '';

            $modelColis = new ColisModel($poid,$valeur,$desc);
            $modelColis->saveColis();
            Flight::render('livraison');
        }
    }
?>