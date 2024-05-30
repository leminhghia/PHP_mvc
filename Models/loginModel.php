<?php

namespace Models;

use Core\Model;

class loginModel extends Model
{
    
    public function getUsers($email,$Password)
    {
        $Query = "SELECT * FROM users WHERE email = '$email' && Password = '$Password'";
        return $this->SelectRow($Query);
}
}