<?php

namespace Models;

use Core\Model;

class DelProdModel extends Model
{
public function ab($id)
    {
        $Query = "DELETE FROM `products` WHERE procode = $id";
        return $this->DeleteRow($Query);
}
}