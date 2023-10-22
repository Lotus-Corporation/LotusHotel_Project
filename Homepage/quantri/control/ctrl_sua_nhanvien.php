<?php 
$ma_nv=$_POST["ma_nv"];
$hoten=$_POST["hoten"];
$sdt=$_POST["sdt"];
$chucvu=$_POST["chucvu"];
$diachi=$_POST["diachi"];
$cccd=$_POST["cccd"];
$luong=$_POST["luong"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update NHANVIEN set HOTEN='$hoten',SDT='$sdt',CHUCVU='$chucvu',DIACHI='$diachi',CCCD='$cccd',LUONG='$luong' where MA_NV='$ma_nv'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=19");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
