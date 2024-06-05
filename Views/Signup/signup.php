
<!DOCTYPE html>
<html lang="en">

<head>
</head>
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f2f2f2;
}

.login-container {
    background-color: #ffffff;
    padding: 20px 40px;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

.login-form h2 {
    margin-bottom: 20px;
    color: #333;
    text-align: center;
}

table {
    width: 100%;
}

td {
    padding: 10px 0;
}

td label {
    display: inline-block;
    width: 100px;
    color: #555;
}

td input {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 16px;
}

.submit-cell {
    text-align: center;
    padding-top: 20px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #5cb85c;
    border: none;
    border-radius: 5px;
    color: white;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #4cae4c;
}

</style>

<body>
    <form  method="post" action="">
        <table>
            <tr>
                <td>Form signup</td>
            </tr>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="Username" required></td>
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
                <td>ngày sinh của bạn là :</td>
                <td><input type="text" name="cauhoi"  required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" onclick="route('signupController')" value="Đăng kí"></td>
                <td><a href="/login">dang nhap</a></td> 
            </tr>
        </table>
    </form>
</body> 