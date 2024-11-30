<?php

return [
    'POST' => [
        '/login' => 'LoginController@connect'
    ],
    'GET' => [
        "/" => "HomeController@index",
        '/login' => 'LoginController@homeLogin',
        '/logout' => 'LoginController@disconnection',
        "/user/[0-9a-z]+/name/[a-zA-a]+" => "UserController@createUser",
        "/user/register" => "UserController@register",
        "/user/home" => "HomeController@homeIndex"
    ]
];