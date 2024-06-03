<?php

namespace Controllers;


use Models\registerEmpModel;

class RegEmpControllers extends \Core\BaseController
{
    protected string $Model = "registerEmpModel";
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
}