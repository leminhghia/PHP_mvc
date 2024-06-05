<?php

namespace Controllers;


use Models\UpProdModel;

class UpProdControllers extends \Core\BaseController
{
    protected string $Model = "UpProdModel";
    public function upprod($id)
    {
        if (isset($_POST["submit"]) && ($_POST["submit"])) {
            $getid = $id;
            $proname = $_POST["proname"];
            $anh = $_POST["image"];
            $price = $_POST["price"];
            $quanity = $_POST["quanity"];
            $description = $_POST["description"];
            $upprod = new UpProdModel();
             $upprod->upprod( $getid,$proname, $anh,$price, $quanity, $description);
            
        } else {
        }
        view('themsuaxoa/upprod');
    }
}