<?php 
$ma_pttt=$_POST["ma_pttt"];
$loai_pttt=$_POST["loai_pttt"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into pttt(MA_PTTT,LOAIPTTT)
values ('$ma_pttt','$loai_pttt')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=19 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>