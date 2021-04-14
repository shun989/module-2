<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table{
        border-collapse: collapse;
        width: 100%;
    }
    th, td{
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid chartreuse;
    }
    img{
        width: 60px;
    }
</style>
<body>
<table border="0">
    <caption><h1 style="color: blue">Danh sách khách hàng.</h1></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
<?php
    $customerlist = array(
        "1" => array("ten" => "Lộc văn Khôi",
                    "ngaysinh" => "1995",
                    "diachi" => "Lạng sơn",
                    "anh" => "image/khoi.jpeg"),
        "2" => array("ten" => "Nguyễn văn Trọng",
                    "ngaysinh" => "2001",
                    "diachi" => "Lào cai",
                    "anh" => "image/trong.jpeg"),
        "3" => array("ten" => "Trần đức Duy",
                    "ngaysinh" => "2001",
                    "diachi" => "Việt trì, Phú thọ.",
                    "anh" => "image/duy.jpeg"),
        "4" => array("ten" => "Đoàn hồng Quân",
                    "ngaysinh" => "1998",
                    "diachi" => "Việt trì, Phú thọ",
                    "anh" => "image/quan.jpeg"),
        "5" => array("ten" => "Nguyễn hương Lan",
                    "ngaysinh" => "1996",
                    "diachi" => "Hà Nội",
                    "anh" => "image/lan.jpeg"),
    );

        foreach($customerlist as $key => $values){
            echo "<tr>";
                echo "<td>".$key."</td>";
                echo "<td>".$values['ten']."</td>";
                echo "<td>".$values['ngaysinh']."</td>";
                echo "<td>".$values['diachi']."</td>";
                echo "<td><img src='".$values['anh']."'></td>";
            echo "</tr>";
        }
?>

</table>
</body>
</html>