<?php
    namespace app\models;

    use Flight;

    Class UserModel {
        
        public function getUsers() {
            $users = [
                [ 'id' => 1, 'name' => 'Bob Jones', 'email' => 'bob@example.com' ],
                [ 'id' => 2, 'name' => 'Bob Smith', 'email' => 'bsmith@example.com' ],
                [ 'id' => 3, 'name' => 'Suzy Johnson', 'email' => 'suzy@example.com' ],
                [ 'id' => 4, 'name' => 'Nomena Maminiaina', 'email' => 'nomena@email.com'],
                [ 'id' => 5, 'name' => 'Henika Maminiaina', 'email' => 'henika@email.com'],
            ];
            return $users;
        }

        public function getUser($id) {
            $users = [
                [ 'id' => 1, 'name' => 'Bob Jones', 'email' => 'bob@example.com' ],
                [ 'id' => 2, 'name' => 'Bob Smith', 'email' => 'bsmith@example.com' ],
                [ 'id' => 3, 'name' => 'Suzy Johnson', 'email' => 'suzy@example.com' ],
                [ 'id' => 4, 'name' => 'Nomena Maminiaina', 'email' => 'nomena@email.com'],
                [ 'id' => 5, 'name' => 'Henika Maminiaina', 'email' => 'henika@email.com'],
            ];
            return $users[$id];
        }
    }

