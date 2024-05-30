
<!DOCTYPE html>
<html lang="en">

<head>
</head>


<body>
    <form  method="post" action="">
        <table>
            <tr>
                <td>Form add emp</td>
            </tr>
            <tr>
                <td>FirstName :</td>
                <td><input type="text" name="FirstName"></td>
            </tr>
            <tr>
                <td>LastName :</td>
                <td><input type="text" name="LastName"></td>
            </tr>
            <tr>
                <td>Dept :</td>
                <td><input type="text" name="Dept"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" onclick="route('EmployeesControllers')" value="ADD"></td>
                <td><a href="/index">Quay lại</a></td> 
            </tr>
        </table>
    </form>
</body> 