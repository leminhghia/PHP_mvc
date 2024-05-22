<?php

namespace Controllers;

use Models\loginModel;

class loginController extends \Core\BaseController
{
    protected string $Model = "loginModel";
    public function login() {
        if (isset($_POST["submit"]) && ($_POST["submit"])) {
            $Username = $_POST["Username"];
            $Password = $_POST["Password"];
            $user = new loginModel();
            $result = $user ->getUsers($Username,$Password);
            if($result){
             
                redirect('index');
            }
            else{

                redirect('login');
                var_dump("Sai mật khẩu hoặc tài khoản");
            }
        }
        view('login/login');
    }
}
