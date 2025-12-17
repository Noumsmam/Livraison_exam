<?php
    namespace App\Models;
    use Flight;

    Class ColisModel {
        private $id;
        private $poid;
        private $valeurParPoid;

        public function __construct($poid,$value) {
            $this->poid=$poid;
            $this->valeurParPoid=$value;
        }
    }
?>