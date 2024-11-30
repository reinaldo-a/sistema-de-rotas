<?php

    require "bootstrap.php";
    
    connect();

    try {
        $router = new App\Router\Router;
        
        $data = $router->handleRequest();
        
        if(!isset($data['data'])){
            throw new \Exception("o indice data esta faltando");
        }
        extract($data['data']);
        
        $view = VIEWS .  $data['view'];

        //dd($data['view']);

        if(!file_exists($view)){
            throw new \Exception("o arquivo da view " . $data['view'] . " não exite");
        }

        if(!isset($data['view'])){
            throw new \Exception("view " . $data['view'] . " não exite");
        }


       require VIEWS . "master.view.php";

    } catch(Exception $e) {
        echo $e->getMessage();
    }