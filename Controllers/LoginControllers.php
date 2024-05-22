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
<<<<<<< HEAD
                redirect('index');
            }
            else{
                redirect('login');
=======
             
                redirect('index');
            }
            else{

                redirect('login');
                var_dump("Sai mật khẩu hoặc tài khoản");
>>>>>>> b5b7dd66c17c39f629e7ea9489b20d7c19ce691d
            }
        }
        view('login/login');
    }
}
