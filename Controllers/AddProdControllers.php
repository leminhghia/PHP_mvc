<?php

namespace Controllers;


use Models\addProdModel;

class AddProdControllers extends \Core\BaseController
{
    protected string $Model = "addProdModel";
    public function addprod()
    {
        if (isset($_POST["submit"]) && ($_POST["submit"])) {
            $proname = $_POST["proname"];
            $anh = $_POST["image"];
            $price = $_POST["price"];
            $quanity = $_POST["quanity"];
            $description = $_POST["description"];
            $addprod = new addProdModel();
            $addprod->addprod( $proname, $anh,$price, $quanity, $description);
        } else {
        }
        view('themsuaxoa/addprod');
    }
}