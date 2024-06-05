<?php

namespace Controllers;


use Models\ResPassModel;

class ResPassControllers extends \Core\BaseController
{
    protected string $Model = "ResPassModel";
    public function respass()
    {
    if (isset($_POST["submit"]) && ($_POST["submit"])) {
        $email = $_POST['email'];
        $Password = $_POST['Password'];
        $cauhoi = $_POST['cauhoi'];
        $respass = new ResPassModel();
        $respass->respass($Password,$email,$cauhoi);

        redirect('login');

        if ($cauhoi == 'cauhoi') {
            echo "Đổi mật khẩu thành công!";
        } else {
        }

    }
    view('respass/respass');
}
}