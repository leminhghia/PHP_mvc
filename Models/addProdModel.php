<?php

namespace Models;

use Core\Model;

class addProdModel extends Model
{
    
    public function addprod($proname, $anh,$price, $quanity, $description)
    {
        $Query = "INSERT INTO products (proname, image, price, quanity, description) 
        VALUES ('$proname','$anh','$price','$quanity','$description')";
        return $this->SelectRow($Query);
}
}