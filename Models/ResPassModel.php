<?php

namespace Models;

use Core\Model;

class ResPassModel extends Model
{
    
    public function respass($Password,$email,$cauhoi)
    {
        $Query = "UPDATE users SET Password = '$Password' WHERE email = '$email' && cauhoi = '$cauhoi'";
        return $this->SelectRow($Query);
}
}