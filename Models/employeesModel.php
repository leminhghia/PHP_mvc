<?php

namespace Models;

use Core\Model;

class EmployeesModel extends Model
{
    public function getEmployees()
    {
        $Query = "SELECT * FROM employees ";
        return $this->SelectRow($Query);
    }
    public function registerUser($FirstName,$LastName,$Dept)
    {
        $Query = "INSERT INTO employees(FirstName,LastName,Dept) 
        VALUES ('$FirstName','$LastName','$Dept')";
        return $this->SelectRow($Query);
}
public function deleteUser($id)
    {
        $Query = "DELETE FROM 'employees' WHERE 'EmpID' = $id";
        return $this->SelectRow($Query);
}
}