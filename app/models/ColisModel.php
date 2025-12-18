<?php
    namespace app\models;
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

        public function getColisById($id) {
            $db=Flight::db();
            $STMT=$db->prepare("SELECT * FROM livraison_colis WHERE id=?");
            $STMT->execute([$id]);
            return $STMT->fetch();
        }

        public function getColisByLivraison($idLivraison) {
            $db=Flight::db();
            $STMT=$db->prepare("SELECT Colis.id AS id_colis FROM livraison_colis JOIN livraison_livraison ON livraison_colis.id = livraison_livraison.colis_id WHERE livraison_livraison.id = ?;");
            $STMT->execute([$idLivraison]);
            return $STMT->fetch();
        }

        public function getAllColis() {
            $db = Flight::db();
            $STMT = $db->prepare("SELECT * FROM livraison_colis;");
            $STMT->execute();
            $result = $STMT->fetchAll(\PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>