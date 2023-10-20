<?php 
$ma_cthd=$_POST["ma_cthd"];
$ma_hd=$_POST["ma_hd"];
$ma_km=$_POST["ma_km"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into CHITIETHOADON(MA_CTHD,MA_HD,MA_KM)
values ('$ma_cthd','$ma_hd','$ma_km')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=25 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>