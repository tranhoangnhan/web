<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các loại sản phẩm</title>
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
    </style>
</head>

<body>
    <?php
include('../admin/ketnoi.php');
$sql="select * from bangloaisp";
$result = $conn->query($sql);


?>

    <table table style="width: 100%">
        <tr>
            <th>Mã Loại</th>
            <th>Tên loại</th>
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

        </tr>
        <?php
    } ?>
    </table>


</body>

</html>