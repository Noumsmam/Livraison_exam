<?php
    namespace App\Models;
    use Flight;

    Class ColisModel {
        private $id;
        private $poid;
        private $description;
        private $valeurParPoid;

        public function __construct($poid,$value,$desc) {
            $this->poid=$poid;
            $this->valeurParPoid=$value;
            $this->description=$desc;
        }

        public function getId(){
            return $this->id;
        }

        public function getPoid() {
            return $this->poid;
        }

        public function getDescription(){
            return $this->description;
        }

        public function getVeleurPoid(){
            return $this->valeurParPoid;
        }

        public function saveColis(){
            $db=Flight::db();
            $STMT=$db->prepare("INSERT INTO livraison_colis(description,poids_kg,valeur_par_kg) VALUES (?,?,?);");
            $STMT->execute([$this->description,$this->poid,$this->valeurParPoid]);
        }
    }
?>