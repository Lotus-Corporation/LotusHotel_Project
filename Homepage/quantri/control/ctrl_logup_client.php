<?php
$username=$_POST["username"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into KHACHHANG(USERNAME,EMAIL,PASS)
values ('$username','$email','$pass')";
if ($link->query($sql) === TRUE) {
    header("location:../../index_menu.php");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>