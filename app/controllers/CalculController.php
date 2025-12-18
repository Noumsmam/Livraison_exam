<?php
    namespace App\Controllers;
    use Flight;
    use app\models\CalculModel;

    Class CalculController {
        public function calculBenefice() {
            $id = $_POST['livraison'];
            $calcul=new CalculModel();
            $valeur = $calcul->calculBeneficeLivraison($id);
            
        }
    }
?>