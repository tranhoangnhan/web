<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trình chỉnh sửa Admin</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        text-align: center;
    }

    th {
        background-color: blue;
        color: #fff;
    }

    td:last-child {
        background-color: #CCFFFF;
    }

    td:first-child {
        background-color: pink;
    }
    th a {
        text-decoration: none;
        color: #fff
    }
    td a {
        text-decoration: none;
        color: #000;
    }
    #head {
        background-color: #632; 
    }

    </style>
</head>

<body>
    <?php
include('../admin/ketnoi.php');
$sql="select * from bangloaisp";
$result = $conn->query($sql);


?>

    <table table style="width: 100%">
    <tr >
        <th colspan="3" id="head">TRANG THÊM XÓA SẢN PHẨM DÀNH CHO QUẢN TRỊ VIÊN</th>
    </tr>
        <tr>
            <th>Mã Loại</th>
            <th>Tên loại</th>
            <th>Chức năng</th>
        </tr>
        <?PHP
    while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td>
                <?PHP echo $row['maLoai'];?>
            </td>
            <td>
                <?PHP echo $row['tenLoai'];?>
            </td>
            <td>    <a href="../admin/sua_sanpham.php?maLoai=<?php echo $row['maLoai']; ?>">Sửa</a> | <a href="../admin/xoa_sanpham.php?maLoai=<?php echo $row['maLoai']; ?>">Xóa</a>
</td>
        </tr>
        <?php
    } ?>
    </table>
    Bạn muốn thêm sản phẩm mới hãy  <a href="them_sanpham.php">ấn vào đây</a>


</body>

</html>