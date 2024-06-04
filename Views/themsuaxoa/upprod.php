<!DOCTYPE html>
<html lang="en">

<head>
</head>


<body>
    <form method="post" action="">
        <table>
            <th>Tên sản phẩm</th>

            <tr>
                <td>Form thêm sản phẩm</td>
            </tr>
            <tr>
                <td>Tên sản phẩm :</td>
                <td><input type="text" name="proname" value="<?php echo "$proname"  ?>"></td>
            </tr>
            <tr>
                <td>Ảnh sản phẩm :</td>
                <td><input type="file" accept=".png,.jpg" name="image"></td>
            </tr>
            <tr>
                <td>Giá sản phẩm :</td>
                <td><input type="number" name="price"></td>
            </tr>
            <tr>
                <td>Số lượng sản phẩm :</td>
                <td><input type="number" name="quanity"></td>
            </tr>
            <tr>
                <td>Mô tả:</td>
                <td><input type="text" name="description"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" onclick="route('UpProdController')" value="ADD"></td>
                <td><a href="/index">Quay lại</a></td>
            </tr>
        </table>
    </form>
</body>