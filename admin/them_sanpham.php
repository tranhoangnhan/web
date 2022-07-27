<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trình thêm sản phẩm</title>
</head>

<body>
    <?php
    include('ketnoi.php');

    if(isset($_POST['add']))
    {
      
        $tenLoai = $_POST['txtLoaiSP'];
        if($tenLoai == "")
        {
            echo ("Khong duoc de trong");
        } else { $sql = "INSERT INTO `bangloaisp`(`maLoai`, `tenLoai`) VALUES (null,'$tenLoai')";
            $r = $conn->real_query($sql);}
       if ($tenLoai == true) {
        header('Location:admin.php');
       }
    
    }
   

?>


    <form action="" method="post">
        Tên loại sản phẩm: <input type="text" name="txtLoaiSP">
        <input type="submit" value="Thêm" name="add">
    </form>
</body>

</html>