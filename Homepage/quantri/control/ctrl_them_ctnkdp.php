<?php 
$ma_ctnkdp=$_POST["ma_ctnkdp"];
$ma_nkdp=$_POST["ma_nkdp"];
$ma_phong=$_POST["ma_phong"];
$dongia=$_POST["dongia"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into chitietnhatkidatphong(MA_CTNKDP,MA_NKDP,MA_PHONG,DONGIAPHONG)
values ('$ma_ctnkdp','$ma_nkdp','$ma_phong','$dongia')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=13 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>