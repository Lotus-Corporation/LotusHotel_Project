<?php 
$ma_nksddv=$_POST["ma_nksddv"];
$ma_kh=$_POST["ma_kh"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into NKSD_DICHVU (MA_NKSD_DICHVU,MA_KH)
values ('$ma_nksddv','$ma_kh')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=17 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>