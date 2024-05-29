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
    [
        "url" => "/signup",
        "name" => "signup",
        'controller' => \Controllers\SignupControllers::class,
        'method' => 'signup'
    ],
];