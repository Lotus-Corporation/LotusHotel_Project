<?php 
$ma_cn=$_POST["ma_cn"];
$tinhthanh=$_POST["tinhthanh"];
$diachi=$_POST["diachi"];
$sdt=$_POST["sdt"];
$ma_nv=$_POST["ma_qli"];
$hinhanh=$_POST["hinhanh"];
$link=new mysqli("localhost","root","","khachsan");
$sql="UPDATE 'chinhanh' SET ma_cn='$ma_cn',tinhthanh='$tinhthanh',diachi='$diachi',sdt='$sdt',ma_qli='$ma_nv',hinhanh='$hinhanh')";
if ($link->query($sql) === TRUE) {
    echo "Sửa dữ liệu thành công!";
  } else {
    echo "Sửa dữ liệu thất bại <br> Lỗi: " . $sql . "<br>" . $link->error;
  }
?>