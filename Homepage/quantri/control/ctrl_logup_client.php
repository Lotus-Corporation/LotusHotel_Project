<?php
$username=$_POST["username"];
$hoten=$_POST["hoten"];
$email=$_POST["email"];
$sdt=$_POST["sdt"];
$cccd=$_POST["cccd"];
$pass=$_POST["pass"];
$link=new mysqli("localhost","root","","khachsan");
$sql="INSERT INTO KHACHHANG_ACCOUNT(USERNAME,HOTEN,EMAIL,SDT,CCCD,PASS) 
VALUES ('$username','$hoten','$email','$sdt','$cccd','$pass')";
if ($link->query($sql) === TRUE) {
    header("location:../../view/login.php");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>