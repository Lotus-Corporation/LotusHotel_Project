<?php 
$ma_cthd=$_POST["ma_cthd"];
$ma_hd=$_POST["ma_hd"];
$ma_km=$_POST["ma_km"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update CHITIETHOADON set MA_HD='$ma_hd',MA_KM='$ma_km' where MA_CTHD='$ma_cthd'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=25");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
