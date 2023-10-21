<?php 
$ma_kh=$_POST["ma_kh"];
$hoten=$_POST["hoten"];
$sdt=$_POST["sdt"];
$cccd=$_POST["cccd"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update KHACHHANG set HOTEN='$hoten',SDT='$sdt',CCCD='$cccd' where MA_KH='$ma_kh'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=20");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
