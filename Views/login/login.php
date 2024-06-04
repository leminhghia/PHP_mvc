<!DOCTYPE html>
<html lang="en">

<head>
</head>


<body>
    <form method="post" action="">
        <table>
            <tr>
                <td>Form login</td>
            </tr>
            <tr>
                <td>email :</td>
                <td><input type="text" name="email" required></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="text" name="Password" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" onclick="route('loginController')" value="Đăng nhập"></td>
                <td><a href="/signup">dang ki</a></td> 
                <td><a href="/respass">quen mk</a></td> 

            </tr>
        </table>
    </form>
</body>