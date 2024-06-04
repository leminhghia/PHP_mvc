<?php

namespace Models;

use Core\Model;

class ProductsModel extends Model
{
    public function getproduct()
    {
        $Query = "SELECT * FROM products ";
        return $this->SelectRow($Query);
    }
}