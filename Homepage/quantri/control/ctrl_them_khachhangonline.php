<?php 
$username=$_POST["username"];
$hoten=$_POST["hoten"];
$email=$_POST["email"];
$sdt=$_POST["sdt"];
$password=$_POST["password"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into KHACHHANG_ONLINE(USERNAME, HOTEN,EMAIL, SDT, PASS)
values ('$username','$hoten','$email','$sdt','$password')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=21 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>