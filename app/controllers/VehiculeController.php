<?php
    namespace app\controllers;
    use app\models\VehiculeModel;
    use Flight;

    Class VehiculeController {
        public function createVehicule() {
            $im = $_POST['immatriculation'] ?? '';
            $type = $_POST['modele'] ?? '';
            $cout = $_POST['cout_revient'] ?? '';

            if($cout < 0) {
                $v = new VehiculeModel(null,null,null);
                Flight::render('vehicule',['error' => 'cout revient non valable','vehicule' => $v->getAllVehicule()]);
            } else {
                $v = new VehiculeModel($im,$type,$cout);
                $v->saveVehicule();
                Flight::render('vehicule',['vehicule' => $v->getAllVehicule()]);
            }
        }
    }
?>