<?php

namespace Controllers;


use Models\ResPassModel;

class ResPassControllers extends \Core\BaseController
{
    protected string $Model = "ResPassModel";
    public function respass()
    {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $Password = $_POST['Password'];
        $cauhoi = $_POST['cauhoi'];
        $respass = new ResPassModel();
        $respass->respass($Password,$email,$cauhoi);
        if ($cauhoi == 'cauhoi') {
            echo "Đổi mật khẩu thành công!";
        } else {
        }
    }
    view('respass/respass');
}
}