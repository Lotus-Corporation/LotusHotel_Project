<?php 
$ma_ctkm=$_POST["ma_ctkm"];
$ma_km=$_POST["ma_km"];
$giatri=$_POST["giatri"];
$ma_lp=$_POST["ma_lp"];
$ma_dv=$_POST["ma_dv"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into CHITIETKHUYENMAI(MA_CTKM,MA_KM,GIATRI,MA_LOAIPHONG,MA_DV)
values ('$ma_ctkm','$ma_km','$giatri','$ma_lp','$ma_dv')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=21 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>