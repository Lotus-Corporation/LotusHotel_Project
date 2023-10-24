<?php 
$thu_muc="../../img/loaiphong/";
$ten_files=$thu_muc . $_FILES["hinhanh"]["name"];
move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$ten_files);

$ma_lp=$_POST["ma_lp"];
$loaiphong=$_POST["loaiphong"];
$hinhanh=$_FILES["hinhanh"]["name"];
$link=new mysqli("localhost","root","","khachsan");
$sql="UPDATE LOAIPHONG SET LOAIPHONG='$loaiphong',Hinhanh='$hinhanh' where MA_LOAIPHONG='$ma_lp'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=10");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
