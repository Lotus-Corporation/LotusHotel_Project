<?php 
$ma_ctnksddv=$_POST["ma_ctnksddv"];
$ma_nksddv=$_POST["ma_nksddv"];
$ma_dv=$_POST["ma_dv"];
$soluong=$_POST["soluong"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update CHITIET_NKSDDV set MA_NKSD_DICHVU='$ma_nksddv',MA_DV='$ma_dv',SOLUONG='$soluong' where MA_CT_NKSDDV='$ma_ctnksddv'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=16");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
