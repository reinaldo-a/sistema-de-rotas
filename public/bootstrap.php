<?php 
    session_start();
    
    require "../vendor/autoload.php";

    $dotenv = Dotenv\Dotenv::createImmutable(ROOT);
    $dotenv->load();