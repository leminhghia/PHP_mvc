
<!DOCTYPE html>
<html lang="en">

<head>
</head>


<body>
    <form  method="post" action="">
        <table>
            <tr>
                <td>Form signup</td>
            </tr>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="Username"></td>
            </tr>
            <tr>
                <td>email :</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="text" name="Password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" onclick="route('signupController')" value="Đăng kí"></td>
                <td><a href="/login">dang nhap</a></td> 
            </tr>
        </table>
    </form>
</body> 