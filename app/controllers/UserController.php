<?php
    namespace app\controllers;

    use Flight;
    use app\models\UserModel;

    class UserController {
        public function login(){
            $data = Flight::request()->data;
            $login = $data->login;
            $password = $data->password;

            $userModel = new UserModel($login, $password);
            $user = $userModel->checkUser();

            
        }
    }
?>