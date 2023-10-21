<?php 
$ma_nv=$_POST["ma_nv"];
$hoten=$_POST["hoten"];
$sdt=$_POST["sdt"];
$chucvu=$_POST["chucvu"];
$diachi=$_POST["diachi"];
$cccd=$_POST["cccd"];
$luong=$_POST["luong"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into nhanvien(MA_NV,HOTEN,SDT,CHUCVU,DIACHI,CCCD,LUONG)
values ('$ma_nv','$hoten','$sdt','$chucvu','$diachi','$cccd','$luong')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=19 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>