<?php
return [

    [
        "url" => "/index",
        "name" => "index",
        'controller' => \Controllers\ProductsControllers::class,
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
    [
        "url" => "/addprod",
        "name" => "addprod",
        'controller' => \Controllers\AddProdControllers::class,
        'method' => 'addprod'
    ],
    [
        "url" => "/deluser/{id}",
        "name" => "delete",
        'controller' => \Controllers\DelProdControllers::class,
        'method' => 'deleteUser'
    ],
 
];