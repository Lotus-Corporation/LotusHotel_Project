<?php 
$ma_ctnksddv=$_POST["ma_ctnksddv"];
$ma_nksddv=$_POST["ma_nksddv"];
$ma_dv=$_POST["ma_dv"];
$soluong=$_POST["soluong"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into CHITIET_NKSDDV(MA_CT_NKSDDV,MA_NKSD_DICHVU,MA_DV,SOLUONG)
values ('$ma_ctnksddv','$ma_nksddv','$ma_dv','$soluong')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=18 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>