<?php 
$ma_kh=$_POST["ma_kh"];
$hoten=$_POST["hoten"];
$sdt=$_POST["sdt"];
$cccd=$_POST["cccd"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into khachhang(MA_KH, HOTEN,SDT, CCCD)
values ('$ma_kh','$hoten','$sdt','$cccd')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=20 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>