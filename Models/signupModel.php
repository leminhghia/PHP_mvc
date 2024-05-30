<?php

namespace Models;

use Core\Model;

class signupModel extends Model
{
    
    public function registerUser($Username,$Password,$email)
    {
        $Query = "INSERT INTO users(Username,Password,email) 
        VALUES ('$Username','$Password','$email')";
        return $this->SelectRow($Query);
}
}