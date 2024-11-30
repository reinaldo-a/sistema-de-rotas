<?php

namespace App\Router; // Define o namespace para a classe Router

use App\Core\Controller; // Importa a classe Controller do namespace App\Core

class Router {

    // Método principal que lida com as requisições
    public function handleRequest() {

        $uri = $_SERVER['REQUEST_URI'];

        $routes = require("routes.php");

        $method = $_SERVER['REQUEST_METHOD'];

        $matchedUri = $this->exactUri($uri, $routes[$method]);

        $paramsData = [];
        if(empty($matchedUri)) {
            $uri = ltrim($uri, "/"); 
            $matchedUri = $this->regularUri($uri, $routes); 
            $uri = explode("/", $uri);

            // Se uma rota correspondente foi encontrada
            $params = $this->getParam($uri, $matchedUri);

            $paramsData = $this->paramsFormat($uri, $params);
        }

        if(!empty($matchedUri)) {
            $controller = new Controller;
            return $controller->baseController($matchedUri, $paramsData);
        }
    } 

    // Método que verifica se a URI é uma correspondência exata nas rotas
    public function exactUri($uri, $routes) {

        if(array_key_exists($uri, $routes)) {
            return [$routes["$uri"]]; 
        }
        return []; 
    }

    // Método que verifica se a URI corresponde a uma rota usando regex
    public function regularUri($uri, $routes) {
        return array_filter(
            $routes,
            function($values) use ($uri) {
                $regex = "/^" . str_replace("/","\/", ltrim($values, "/")) . "$/";
                return preg_match($regex, $uri); 
            },
            ARRAY_FILTER_USE_KEY 
        );
    }

    // Método que deve obter parâmetros da rota (ainda não implementado)
    public function getParam($uri, $matchedUri) {
        if(!empty($matchedUri)) {
            $matchedToGetParam = array_keys($matchedUri)[0];
            $matchedToGetParam = explode("/", $matchedToGetParam);

            return array_diff($uri, $matchedToGetParam);

        }  
        return [];
    }

    public function paramsFormat($uri, $params) { 
        $paramsData = [];
        foreach($params as $key => $param ) {
            $paramsData[ $uri[$key - 1]] = $param; 
        }
        return $paramsData;
    }
}
