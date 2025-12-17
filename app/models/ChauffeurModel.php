<?php
    namespace App\Models;

    use Flight;
    Class ChauffeurModel {
        private $id;
        private $nom;
        private $prenom;
        private $salaire;

        public function __construct($nom,$prenom) {
            $this->nom=$nom;
            $this->prenom=$prenom;
        }

        public function getId() {
            return $this->id;
        }

        public function getNom(){
            return $this->nom;
        }

        public function getPrenom(){
            return $this->prenom;
        }

        public function getsalaire(){
            return $this->salaire;
        }

        public function setSalaire($salaire){
            $this->salaire=$salaire;
        }
    }    
?>