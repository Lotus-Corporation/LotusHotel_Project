<?php 
$ma_ctnkdp=$_POST["ma_ctnkdp"];
$ma_nkdp=$_POST["ma_nkdp"];
$ma_phong=$_POST["ma_phong"];
$dongia=$_POST["dongia"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update CHITIETNHATKIDATPHONG set MA_NKDP='$ma_nkdp',MA_PHONG='$ma_phong',DONGIAPHONG='$dongia' where MA_CTNKDP='$ma_ctnkdp'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=13");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
