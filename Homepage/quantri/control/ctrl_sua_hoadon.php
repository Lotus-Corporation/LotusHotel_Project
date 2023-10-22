<?php 
$ma_hd=$_POST["ma_hd"];
$ma_nv=$_POST["ma_nv"];
$ma_pttt=$_POST["ma_pttt"];
$ma_kh=$_POST["ma_kh"];
$ma_nkdp=$_POST["ma_nkdp"];
$ma_nksddv=$_POST["ma_nksddv"];
$ngaylaphoadon=$_POST["ngaylaphoadon"];
$tongtien=$_POST["tongtien"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update HOADON set MA_NV='$ma_nv', MA_PTTT='$ma_pttt', MA_KH='$ma_kh', MA_NKDP='$ma_nkdp', MA_NKSD_DICHVU='$ma_nksddv', NGAYLAP_HD='$ngaylaphoadon', TONGTIEN='$tongtien' where MA_HD='$ma_hd'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=24");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
