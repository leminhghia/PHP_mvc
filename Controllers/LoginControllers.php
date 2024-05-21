<?php

namespace Controllers;

use Models\loginModel;

class LoginControllers extends \Core\BaseController
{
    protected string $Model = "loginModel";
    public function LoginControllers()
    {
        $loginModel= new loginModel();
        $loginModel->getUsers();
        $Users = $loginModel->getUsers();
        view('index/index' , compact('Users'));
    }

}