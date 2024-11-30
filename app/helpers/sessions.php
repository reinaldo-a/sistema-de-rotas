<?php

    function logged($login = 'true') {

        if(isset($_SESSION['LOGGED']) && $login == 'true') {
            return true;
        }
        if($login == 'false') {
            return true;
        }
    }

    function teste() {
        $id = $_SESSION['LOGGED']->id;
        $token = $_SESSION['LOGGED']->token;

        if( $token == (findByTable('users', 'id', $id, 'token'))) {
            return isset($_SESSION['LOGGED']);
        } else {
            unset($_SESSION['LOGGED']);
            return 0;
        }
    }