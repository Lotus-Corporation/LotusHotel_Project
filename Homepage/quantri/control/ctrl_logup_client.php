<?php
$username=$_POST["username"];
$hoten=$_POST["hoten"];
$email=$_POST["email"];
$number=$_POST["number"];
$pass=$_POST["pass"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into KHACHHANG_ONLINE(USERNAME, HOTEN,EMAIL, SDT,PASS)
values ('$username','$hoten','$email','$number','$pass')";
if ($link->query($sql) === TRUE) {
    header("location:../../index_menu.php");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>