<?php
    namespace app\controllers;

    use Flight;
    use app\models\UserModel;

    class UserController {
        public function login(){
             $login = $_POST['login'] ?? '';
            $pwd   = $_POST['pwd'] ?? '';

            if ($login === '' || $pwd === '') {
                Flight::redirect('/');
                return;
            }

            $userModel = new UserModel($login, $pwd);
            $user = $userModel->checkUser();
            if($user->checkLogin()){
                Flight::render('livraison');
            } else {
                Flight::redirect(BASE_URL .'/');
            }
        }
    }
?>