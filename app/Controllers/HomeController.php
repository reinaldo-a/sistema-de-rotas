<?php

    namespace App\Controllers;

    class HomeController {
        public function  index() {
            $users = all('users');
            return [
                'view' => "dashboard/home.view.php",
                  'data' => ['title' => 'home', 'users' => $users]
              ];
        }

        public function homeIndex() {
            return [
                'view' => "dashboard/homeUser.view.php",
                'data' => ['title' => 'homeUser']
              ];
        }

    }