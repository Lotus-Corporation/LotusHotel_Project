<?php 
$ma_ctkm=$_POST["ma_ctkm"];
$ma_km=$_POST["ma_km"];
$giatri=$_POST["giatri"];
$ma_lp=$_POST["ma_lp"];
$ma_dv=$_POST["ma_dv"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update CHITIETKHUYENMAI set MA_KM='$ma_km',GIATRI='$giatri',MA_LOAIPHONG='$ma_lp',MA_DV='$ma_dv' where MA_CTKM='$ma_ctkm'";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=28");
 } else {
    echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
 }
 ?>
