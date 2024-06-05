<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

    .fix {
        border: 1px;
        display: flex;
        justify-content: center;
    }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<body>
    <center><table>
        <tr>
            <td>Danh sách nhân viên</td>
        </tr>
        <tr>
            <th class="fix">#</th>
            <th>Tên sản phẩm</th>
            <th>Ảnh sản phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Số lượng sản phẩm</th>
            <th>Mô tả</th>
            <th>Sửa</th>
            <th>xóa</th>
        </tr>
        <?php
        $i = 1;
        foreach ($products as $product) : ?>
            <tr>
                <td><?php echo  $i++ ?></td>
                <td><?= $product['proname'] ?></td>
                <td><img style="width:100px" src="/img/<?php echo $product['image'] ?>" ; alt=""></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['quanity'] ?></td>
                <td><?= $product['description'] ?></td>
                <th><a href="<?= route('upprod', ['id' => $product['procode']]) ?>">sửa</a></th>
                <th><a href="<?= route('delete', ['id' => $product['procode']]) ?>">xóa</a></th>
            </tr>
        <?php endforeach; ?>

    </table>

    <a href="/addprod">thêm</a></center>

   

</body>

</html>