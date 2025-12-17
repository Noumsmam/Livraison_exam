<?php
    namespace App\Models;
    use Flight;

    Class EntrepotModel {
        private $id;
        private $nom;
        private $adresse;

        public function __construct($nom,$adresse) {
            $this->nom=$nom;
            $this->adresse=$adresse;
        }

        public function getId() {
            return $this->id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getAdresse(){
            return $this->adresse;
        }
    }
?> 