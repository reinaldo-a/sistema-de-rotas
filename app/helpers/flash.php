<?php 

    function setFlash($index, $message, $rota, $type = 'danger') {
        if(!isset($_SESSION['flash'][$index])) {
            $_SESSION['flash'][$index] = "<div class='alert alert-$type'>$message</div>";
            redirect($rota);
            exit;
        }
    }

    function getMessage($index) {
        if(isset($_SESSION['flash'][$index])) {
            $message = $_SESSION['flash'][$index];
            unset($_SESSION['flash'][$index]);
            return $message;
        } else {
            return [];
        }
    }