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
        private $dateLivraison;

        public function __construct($idColis,$idChauffeur,$idVehicule,$idEntrepot,$adresse,$status,$cout,$chiffreAffaire,$dateLivraison) {
            $this->idColis=$idColis;
            $this->idChauffeur=$idChauffeur;
            $this->idVehicule=$idVehicule;
            $this->idEntrepot=$idEntrepot;
            $this->adresse=$adresse;
            $this->status=$status;
            $this->cout=$cout;
            $this->chiffreAffaire=$chiffreAffaire;
            $this->dateLivraison=$dateLivraison;
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

        public function getDateLivraison(){
            return $this->dateLivraison;
        }

        public function saveLivraison(){
            $db=Flight::db();
            $STMT = $db->prepare("INSERT INTO livraison_livraison
            (colis_id,chauffeur_id,vehicule_id,entrepot_id,adresse_destination,status_id,date_livraison,cout_revient,chiffre_affaire) 
            VALUES (?,?,?,?,?,?,?,?,?);");
            $STMT->execute([$this->getIdColis(),$this->getIdVehicule(),$this->getIdEntrepot(),$this->getAdresse(),$this->getDateLivraison(),$this->getCout(),$this->getChiffreAffaire()]);
        }
    }
?>