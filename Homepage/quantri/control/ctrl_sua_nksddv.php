<?php 
$ma_nksddv=$_POST["MA_NKSD_DICHVU"];
$ma_kh=$_POST["ma_kh"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update NKSD_DICHVU set MA_KH='$ma_kh' where MA_NKSD_DICHVU='$ma_nksddv'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=15");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
