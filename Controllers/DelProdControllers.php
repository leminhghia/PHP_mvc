<?php

namespace Controllers;

use Models\DelProdModel;


class DelProdControllers extends \Core\BaseController
{
    protected string $Model = "DelProdModel";
    public function deleteUser($id)
    {
        $del = new DelProdModel();
        $resultDel = $del->ab($id);
        if($resultDel) {
            redirect('index');
        }else {
            redirect('index');
        }
    }
  
}
