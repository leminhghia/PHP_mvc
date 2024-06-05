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
<<<<<<< HEAD
        "url" => "/respass",
        "name" => "respass",
        'controller' => \Controllers\ResPassControllers::class,
        'method' => 'respass'
    ],
    [
=======
>>>>>>> f7f2604ab089674c26ec224a763bfd07d8d2bfde
        "url" => "/deluser/{id}",
        "name" => "delete",
        'controller' => \Controllers\DelProdControllers::class,
        'method' => 'deleteUser'
    ],
<<<<<<< HEAD
    [
        "url" => "/upprod/{id}",
        "name" => "upprod",
        'controller' => \Controllers\UpProdControllers::class,
        'method' => 'upprod'
    ],
=======
 
>>>>>>> f7f2604ab089674c26ec224a763bfd07d8d2bfde
];