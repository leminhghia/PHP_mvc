<?php

namespace Controllers;

use Models\signupModel;

class signupControllers extends \Core\BaseController
{
  protected string $Model = "signupModel";
  public function signup()
  {
    if (isset($_POST["submit"]) && ($_POST["submit"])) {
      $Username = $_POST["Username"];
      $Password = $_POST["Password"];
      $email = $_POST["email"];
      $cauhoi = $_POST["cauhoi"];
      $registerUser = new signupModel();
      $registerUser->registerUser($Username, $Password, $email,$cauhoi);
      echo "Đăng kí thành công";
    } else {
    }
    
    view('signup/signup');
  }
}
