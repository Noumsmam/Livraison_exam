<?php
    namespace app\controllers;
    use Flight;
    use app\models\ColisModel;

    Class ColisController {
        public function createColis(){
            $desc=$_POST['description'] ?? '';
            $poid=$_POST['poids_kg'] ?? '';
            $valeur=$_POST['valeur_par_kg'] ?? '';
            $col = new ColisModel(null,null,null);
            if($poid < 0 || $valeur < 0){
                Flight::render('colis',['error' => 'valeur non acceptable(s)','colis' => $col->getAllColis()]);
                return ;
            } else {
                $modelColis = new ColisModel($poid,$valeur,$desc);
                $modelColis->saveColis();
                Flight::render('colis',['colis' => $modelColis->getAllColis()]);
            }

        }
    }
?>