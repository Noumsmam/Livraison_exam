<?php
    namespace app\controllers;
    use app\models\ChauffeurModel;
    use Flight;

    Class ChauffeurController {
        public function addChauffeur() {
            $nom = $_POST['nom'] ?? '';
            $prenom = $_POST['prenom'] ?? '';
            $salaire = $_POST['salaire_par_livraison'] ?? '';
            if($salaire<0){
                $c=new ChauffeurModel(null,null,null);
                Flight::render('chauffeur',['error'=>'format de salaire non valable','chauffeur' => $c->getAllChauffeur()]);
                return ;
            }
            else {
                $chauffeur = new ChauffeurModel($nom,$prenom,$salaire);
                $chauffeur->saveChauffeur();
                Flight::render('chauffeur',['chauffeur' => $chauffeur->getAllchauffeur()]);
            } 
        }
    }
?>