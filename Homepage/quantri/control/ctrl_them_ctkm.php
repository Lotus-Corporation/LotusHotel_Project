<?php 
$ma_ctkm=$_POST["ma_ctkm"];
$ma_km=$_POST["ma_km"];
$giatriphantram=$_POST["giatriphantram"];
$giatrithuc=$_POST["giatrithuc"];
$ma_lp=$_POST["ma_lp"];
$ma_dv=$_POST["ma_dv"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into CHITIETKHUYENMAI(MA_CTKM,MA_KM,GIATRI_PHANTRAM,GIATRI_THUC,MA_LOAIPHONG,MA_DV)
values ('$ma_ctkm','$ma_km','$giatriphantram','$giatrithuc','$ma_lp','$ma_dv')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=18 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>