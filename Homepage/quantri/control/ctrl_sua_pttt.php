<?php 
$ma_pttt=$_POST["ma_pttt"];
$LOAIPTTT=$_POST["LOAIPTTT"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update PTTT set LOAIPTTT='$LOAIPTTT' where MA_PTTT='$ma_pttt'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=23");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
