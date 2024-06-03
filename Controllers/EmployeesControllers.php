<?php

namespace Controllers;

use Models\EmployeesModel;

class employeesControllers extends \Core\BaseController
{
    protected string $Model = "EmployeesModel";
    public function index()
    {
        $user = new EmployeesModel();
        $user->getEmployees();
        $Users = $user->getEmployees();
        view('index/index', compact('Users'));
    }
    public function deleteUser()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
    }
}
