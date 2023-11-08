<?php 
$username=$_POST["username"];
$hoten=$_POST["hoten"];
$email=$_POST["email"];
$sdt=$_POST["sdt"];
$cccd=$_POST["cccd"];
$password=$_POST["password"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update KHACHHANG_ACCOUNT set HOTEN='$hoten',EMAIL='$email',SDT='$sdt',CCCD='$cccd',PASS='$password' where USERNAME='$username'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=21");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
