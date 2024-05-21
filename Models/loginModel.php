<?php

namespace Models;

use Core\Model;

class loginModel extends Model
{
    
    public function getUsers($Username,$Password)
    {
        $Query = "SELECT * FROM users WHERE Username = '$Username' && Password = '$Password'";
        return $this->SelectRow($Query);
}
}