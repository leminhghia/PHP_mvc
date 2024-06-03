<?php

namespace Controllers;

use Models\DelEmpModel;


class DelEmpControllers extends \Core\BaseController
{
    protected string $Model = "DelEmpModel";
    public function deleteUser()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
        }
    }
}
