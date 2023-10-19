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
$sql="insert into HOADON(MA_HD, MA_NV, MA_PTTT, MA_KH, MA_NKDP, MA_NKSD_DICHVU, NGAYLAP_HD, TONGTIEN)
values ('$ma_hd','$ma_nv','$ma_pttt','$ma_kh','$ma_nkdp','$ma_nksddv','$ngaylaphoadon','$tongtien')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=24 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>