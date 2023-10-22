<?php 
$thu_muc="../../img/dichvu/";
$ten_files=$thu_muc . $_FILES["hinhanh"]["name"];
move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$ten_files);

$ma_dv=$_POST["ma_dv"];
$ten_dv=$_POST["ten_dv"];
$dongia=$_POST["dongia"];
$donvitinh=$_POST["donvitinh"];
$hinhanh=$_FILES["hinhanh"]["name"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update DICHVU set TENDV='$ten_dv',DONGIADV='$dongia',DONVITINH='$donvitinh',HINHANHDV='$hinhanh' where MA_DV='$ma_dv'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=14");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
