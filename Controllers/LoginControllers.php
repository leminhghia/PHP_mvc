<?php

namespace Controllers;

use Models\loginModel;

class loginControllers extends \Core\BaseController
{
    protected string $Model = "loginModel";
    public function login() {
        if (isset($_POST["submit"]) && ($_POST["submit"])) {
            $email = $_POST["email"];
            $Password = $_POST["Password"];
            $user = new loginModel();
            $result = $user ->getUsers($email,$Password);
            if($email == "" || $Password == "") {
                redirect('login');
            }
            else if($result){
                redirect('index');
            }
        }
            view('login/login');
    }}
