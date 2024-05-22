<?php
return [

    [
        "url" => "/",
        "name" => "index",
        'controller' => \Controllers\Index::class,
        'method' => 'index'
    ],
    [
        "url" => "/login",
        "name" => "login",
        'controller' => \Controllers\LoginControllers::class,
        'method' => 'login'
    ],

];