<?php
return [

    [
        "url" => "/index",
        "name" => "index",
        'controller' => \Controllers\EmployeesControllers::class,
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
        "url" => "/register",
        "name" => "register",
        'controller' => \Controllers\RegEmpControllers::class,
        'method' => 'register'
    ],
];