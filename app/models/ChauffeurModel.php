<?php
    namespace app\models;

    use Flight;
    Class ChauffeurModel {
        private $id;
        private $nom;
        private $prenom;
        private $salaire;

        public function __construct($nom,$prenom,$salaire) {
            $this->nom=$nom;
            $this->prenom=$prenom;
            $this->salaire=$salaire;
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

        public function saveChauffeur(){
            $db = Flight::db();
            $STMT = $db->prepare("INSERT INTO livraison_chauffeur(nom,prenom,salaire_par_livraison) VALUES (?,?,?);");
            $STMT->execute([$this->nom,$this->prenom,$this->salaire]);
        }

        public function getAllChauffeur() {
            $db = Flight::db();
            $STMT = $db->prepare("SELECT * FROM livraison_chauffeur;");
            $STMT->execute();
            $result=$STMT->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }    
?>