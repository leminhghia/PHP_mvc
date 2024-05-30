<?php

namespace Controllers;

use Models\EmployeesModel;
use Models\registerEmpModel;

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
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $FirstName = $_POST["FirstName"];
            $LastName = $_POST["LastName"];
            $Dept = $_POST["Dept"];
            $registerUser = new registerEmpModel();
            $registerUser->registerUser($FirstName, $LastName, $Dept);
            echo "Đăng kí thành công";
        } else {
        }
        view('themsuaxoa/registerEmp');
    }
    public function deleteUser()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
    }
}
