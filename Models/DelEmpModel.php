<?php

namespace Models;

use Core\Model;

class EmployeesModel extends Model
{
public function deleteUser($id)
    {
        $Query = "DELETE FROM 'employees' WHERE 'EmpID' = $id";
        return $this->SelectRow($Query);
}
}