<?php
    namespace App\Models;
    use Flight;

    Class LivraisonModel {
        private $id;
        private $idColis;
        private $idChauffeur;
        private $idVehicule;
        private $idEntrepot;
        private $adresse;
        private $status;
        private $cout;
        private $chiffreAffaire;

        public function __construct($idColis,$idChauffeur,$idVehicule,$idEntrepot,$adresse,$status,$cout,$chiffreAffaire) {
            $this->idColis=$idColis;
            $this->idChauffeur=$idChauffeur;
            $this->idVehicule=$idVehicule;
            $this->idEntrepot=$idEntrepot;
            $this->adresse=$adresse;
            $this->status=$status;
            $this->cout=$cout;
            $this->chiffreAffaire=$chiffreAffaire;
        }

        public function getId() {
            return $this->id;
        }

        public function getIdColis() {
            return $this->idColis;
        }

        public function getIdChauffeur() {
            return $this->idChauffeur;
        }

        public function getIdVehicule() {
            return $this->idVehicule;
        }

        public function getIdEntrepot() {
            return $this->idEntrepot;
        }

        public function getAdresse() {
            return $this->adresse;
        }

        public function getStatus() {
            return $this->status;
        }

        public function getCout() {
            return $this->cout;
        }

        public function getChiffreAffaire() {
            return $this->chiffreAffaire;
        }

    }
?>