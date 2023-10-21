<?php 
$ma_lp=$_POST["MA_LOAIPHONG"];
$loaiphong=$_POST["loaiphong"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update LOAIPHONG set LOAIPHONG='$loaiphong' where MA_LOAIPHONG='$ma_lp'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=10");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
