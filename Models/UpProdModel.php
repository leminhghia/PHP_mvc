<?php

namespace Models;

use Core\Model;

class UpProdModel extends Model
{
    public function upprod( $getid,$proname, $anh,$price, $quanity, $description)
    {
        $Query = "UPDATE products SET proname = '$proname', image = '$anh', price = '$price', quanity = '$quanity', description = '$description'
        WHERE procode =$getid";
        return $this->SelectRow($Query);
    }
}