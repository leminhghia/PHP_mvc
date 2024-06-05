<?php

namespace Models;

use Core\Model;

class signupModel extends Model
{
    
    public function registerUser($Username,$Password,$email,$cauhoi)
    {
        $Query = "INSERT INTO users(Username,Password,email,cauhoi) 
        VALUES ('$Username','$Password','$email','$cauhoi')";
        return $this->SelectRow($Query);
}
}