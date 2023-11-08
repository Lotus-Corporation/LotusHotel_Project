<?php 
$ma_ctkm=$_POST["ma_ctkm"];
$ma_km=$_POST["ma_km"];
$giatriphantram=$_POST["giatriphantram"];
$giatrithuc=$_POST["giatrithuc"];
$ma_lp=$_POST["ma_lp"];
$ma_dv=$_POST["ma_dv"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update CHITIETKHUYENMAI set MA_KM='$ma_km',GIATRI_PHANTRAM='$giatriphantram',GIATRI_THUC='$giatrithuc',MA_LOAIPHONG='$ma_lp',MA_DV='$ma_dv' where MA_CTKM='$ma_ctkm'";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=18");
 } else {
    echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
 }
 ?>
