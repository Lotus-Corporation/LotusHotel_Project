<?php 
$username=$_POST["username"];
$hoten=$_POST["hoten"];
$email=$_POST["email"];
$sdt=$_POST["sdt"];
$password=$_POST["password"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update KHACHHANG_ONLINE set HOTEN='$hoten',EMAIL='$email',SDT='$sdt',PASS='$password' where USERNAME='$username'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=21");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
