<?php

namespace Models;

use Core\Model;

class registerEmpModel extends Model
{
    
    public function registerUser($FirstName,$LastName,$Dept)
    {
        $Query = "INSERT INTO employees(FirstName,LastName,Dept) 
        VALUES ('$FirstName','$LastName','$Dept')";
        return $this->SelectRow($Query);
}
}