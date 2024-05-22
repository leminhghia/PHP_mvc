<?php

namespace Controllers;

use Models\loginModel;

class loginControllers extends \Core\BaseController
{
    protected string $Model = "loginModel";
    public function login() {
        if (isset($_POST["submit"]) && ($_POST["submit"])) {
            $Username = $_POST["Username"];
            $Password = $_POST["Password"];
            $user = new loginModel();
            $result = $user ->getUsers($Username,$Password);
            if($result){
<<<<<<< HEAD
=======

>>>>>>> nhanhb
                redirect('index');
            }
            else{
                redirect('login');
            }
        }
        view('login/login');
    }
}
