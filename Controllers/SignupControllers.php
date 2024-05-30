<?php

namespace Controllers;

use Models\signupModel;

class signupControllers extends \Core\BaseController
{
  protected string $Model = "signupModel";
  public function signup()
  {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $Username = $_POST["Username"];
      $Password = $_POST["Password"];
      $email = $_POST["email"];
      $registerUser = new signupModel();
      $registerUser->registerUser($Username, $Password, $email);
      echo "Đăng kí thành công";
    } else {
    }
    
    view('signup/signup');
  }
}
