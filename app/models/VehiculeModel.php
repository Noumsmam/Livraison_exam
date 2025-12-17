<?php
    namespace App\Models;

    use Flight;

    Class VehiculeModel {
        private $id;
        private $immatriculation;
        private $type;
        private $cout_revient;

        public function __construct($immatriculation,$type) {
            $this->immatriculation=$immatriculation;
            $this->type=$type;
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
    }
?>