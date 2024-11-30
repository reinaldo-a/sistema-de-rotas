<?php 

    namespace App\Controllers;


    class LoginController {

        public function homeLogin() {
            return [
                'view' => "auth/login.view.php",
                'data' => ['title' => 'Login']
            ];
        }

        public function connect() {
            
            $cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
            $password = filter_input(INPUT_POST, 'passwold', FILTER_SANITIZE_SPECIAL_CHARS);

            if(empty($cpf) || empty($password)) {
                return setFlash('msg', 'Prencha todos os campos', '/login', 'danger');
            }
            
            $user = findByTable('users', 'cpf', $cpf);

            if(!$user) {
                return setFlash('msg', 'Usuario ou senha incorretos', '/login', 'danger');
            } elseif(!password_verify($password, $user->password)) {
                return setFlash('msg', 'Usuario ou senha incorretos', '/login', 'danger');
            } else {
                $_SESSION['LOGGED'] = $user;
                return setFlash('msg', 'Login Realisado com sucesso', '/user/home', 'success');
            }
        }

        public function disconnection() {
            if(isset($_SESSION['LOGGED'])) {
                unset($_SESSION['LOGGED']);
            }
            return setFlash('msg', 'faça um novo login', '/', 'success');
        } 

    }