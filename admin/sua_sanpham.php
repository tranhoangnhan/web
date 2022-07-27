<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trình sửa sản phẩm</title>
</head>

<body>
<?php
      include('ketnoi.php');
      if(isset($_GET['maLoai'])) {
        $maLoai = $_GET["maLoai"];
      }
?>

    <?php

      if(isset($_POST['sua']))
      {
        $tenLoai = $_POST['txtTenMoi'];

        if($tenLoai == "" || $maLoai == "")
        {
            echo ("Khong duoc de trong");
        } else {
            $sql = "UPDATE bangloaisp 
                    SET tenLoai = '$tenLoai'
                    WHERE maLoai = $maLoai
            ";
 if (mysqli_query($conn, $sql)) {
    echo "Sửa thành công";
} else {
    echo "Sửa thất bại: " . mysqli_error($conn);
}
if ($tenLoai == true) {
    header('Location:admin.php');
   }

        }






      }


      
       



?>




    <form action="" method="post">
        Tên cần thay đổi: <input type="text" name="txtTenMoi">
        <input type="submit" value="Sửa" name="sua">
    </form>
</body>

</html>