<?php 
$ma_cn=$_POST["ma_cn"];
$tinhthanh=$_POST["tinhthanh"];
$diachi=$_POST["diachi"];
$sdt=$_POST["sdt"];
$ma_nv=$_POST["ma_qli"];
$hinhanh=$_POST["hinhanh"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into chinhanh(ma_cn,diachi,tinhthanh,sdt,ma_nv,hinhanh)
values ('$ma_cn','$tinhthanh','$diachi','$sdt','$ma_nv','$hinhanh')";
if ($link->query($sql) === TRUE) {
    echo "Thêm dữ liệu thành công";
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>