<?php

namespace App\Core; 
class Controller {

    public function baseController($matchedUri, $paramsData) {
        [$controller, $method] = explode("@", array_values($matchedUri)[0]);
        
        $controllerClass = CONTROLLER_PATH . "$controller";

        if(!class_exists($controllerClass)){
            throw new \Exception("class $controller não encontrada");
        }

        $controllerMastar = new $controllerClass;
        
        if(!method_exists($controllerMastar, $method)) {
            throw new \Exception("Metodo $method não enconotrado no controller $controller");
        }

        $controller = $controllerMastar->$method($paramsData);

   

        return $controller;


    }


}