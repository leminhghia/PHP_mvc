

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>


<body>
    <form  method="post">
        <table>
            <tr>
                <td>Form login</td>
            </tr>
            <tr>
                <td>email :</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>password :</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Đăng nhập"></td>
            </tr>
        </table>
        <?php
        $db_host = "localhost";
        $db_name = "php_mvc_db";
        $db_user = "root";
        $db_pass = "";

        $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
        if (isset($_POST["submit"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $sql = "SELECT * FROM users WHERE email='$email'";
            $query = mysqli_query($conn, $sql);
            $checkemail = mysqli_num_rows($query);
            $data = mysqli_fetch_assoc($query);
            if ($email == "" || $password == "") {
                echo "bạn vui lòng nhập đầy đủ thông tin";
            } else {
                if ($checkemail == 1) {
                  if($password==$data['Password']){
                    $_SESSION['users']=$data;
                    header('http://localhost:3000/Views/index/t.php');
                  }
                else {
                    echo "Sai mật khẩu";
                }
            }
            else{
                echo "Email không tồn tại";
            }
        }}
        ?>
    </form>
</body> 

<?php require_once __DIR__ . "/../layouts/footer.php"; ?>
