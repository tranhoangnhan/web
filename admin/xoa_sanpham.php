<?php
      include('ketnoi.php');
      if(isset($_GET['maLoai'])) {
        $maLoai = $_GET["maLoai"];
        echo $maLoai;
      }
?>

<?php
   
           $sql = "DELETE FROM bangloaisp WHERE maLoai='$maLoai';";
            
           // Thực hiện câu truy vấn
           if (mysqli_query($conn, $sql)) {
               echo "Xóa thành công";
           } else {
               echo "Xóa thất bại: " . mysqli_error($conn);
           }
           if ($maLoai == true) {
               header('Location:admin.php');
              }
      

?>
