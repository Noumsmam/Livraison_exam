<?php
    namespace app\models;

    use Flight;

    Class UserModel {
        private $login;
        private $password;

        public function __construct($login, $password){
            $this->login=$login;
            $this->password=$password;    
        }

        public function getLogin(){
            return $this->login;
        }

        public function getPassword(){
            return $this->password;
        }

        public function checkUser(){
            $db = Flight::db();
            $STMT=$db->prepare("SELECT * FROM livraison_user WHERE logins = ? AND pwd = ?;");
            $STMT->execute([$this->login,$this->password]);
            $result=$STMT->fetch();
            return $result;
        }

       public function getUser() {
            $db = Flight::db();
            $STMT = $db->prepare("SELECT * FROM user;");
            $STMT->execute();
            return $STMT->fetchAll(PDO::FETCH_ASSOC);
    }
}
