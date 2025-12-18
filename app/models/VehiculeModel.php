<?php
    namespace App\Models;

    use Flight;

    Class VehiculeModel {
        private $id;
        private $immatriculation;
        private $type;
        private $cout_revient;

        public function __construct($immatriculation,$type,$cout) {
            $this->immatriculation=$immatriculation;
            $this->type=$type;
            $this->cout_revient=$cout;
        }

        public function getId(){
            return $this->id;
        }

        public function getImmatriculation(){
            return $this->immatriculation;
        }

        public function getType(){
            return $this->immatriculation;
        }

        public function getCoutRevient(){
            return $this->cout_revient;
        }

        public function setCoutRevient($cout){
            $this->cout_revient=$cout;
        }

        public function saveVehicule(){
            $db=Flight::db();
            $STMT=$db->prepare("INSERT INTO livraison_vehicule(immatriculation,type,cout_revient) VALUES (?,?,?);");
            $STMT->execute([$this->immatriculation,$this->type,$this->cout_revient]);
        }

        public function getAllVehicule(){
            $db = Flight::db();
            $STMT = $db->prepare("SELECT * FROM livraison_vehicule;");
            $STMT->execute();
            $result = $STMT->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>