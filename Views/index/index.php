<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   

    .main_menu {
        list-style: none;
        margin-right: 30px;
    }

    .main_menu>li {
        border: none;
        float: right;
        margin-left: 50px;
      
    }

    th,
    td {
        text-align: center;
        border: 1px solid black;
    }
    .fix{
        border: 1px ;
        display: flex;
        justify-content: center;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
    <table>
        <tr>
            <td>Danh sách nhân viên</td>
        </tr>
        <tr>
            <th class="fix">#</th>
            <th>EmpID</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Dept</th>
            <th>Sửa</th>
            <th>xóa</th>
        </tr>
        <?php
        $i = 1;
        foreach ($Users as $User) : ?>
            <tr>
                <td><?php echo  $i++ ?></td>
                <td><?= "EMP" . $User['EmpID'] ?></td>
                <td><?= $User['FirstName'] ?></td>
                <td><?= $User['LastName'] ?></td>
                <td><?= $User['Dept'] ?></td>
                <th><a href="/index&id= <?php echo $row['EmpID']; ?>">Sửa</a></th>
                <th><a onclick="return Del('<?php echo $row['FirstName']; ?>')" href="/&id=<?php echo $row['EmpID']; ?>">Xóa</a></th>
            </tr>
        <?php endforeach; ?>

    </table>
    <a href="/register">thêm</a>
</body>

</html>