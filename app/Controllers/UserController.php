<?php

namespace App\Controllers;

class UserController {
    public function show($paramsData) {
        echo "show";
    }
    public function createUser($paramsData) {
        return [
            'view' => "user/create.view.php",
              'data' => [
                'user' => $paramsData['user'],
                'name' => $paramsData['name'],
                'title' => "Novo susario"
               ]
          ];
    }
}