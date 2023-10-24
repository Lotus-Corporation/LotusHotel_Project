<?php 
$thu_muc="../../img/phong/";
$ten_files=$thu_muc . $_FILES["hinhanh"]["name"];
move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$ten_files);

$ma_phong=$_POST["ma_phong"];
$MA_LOAIPHONG=$_POST["MA_LOAIPHONG"];
$tenphong=$_POST["tenphong"];
$dongiaphong=$_POST["dongiaphong"];
$ma_cn=$_POST["ma_cn"];
$songuoitoida=$_POST["songuoitoida"];
$hinhanh=$_FILES["hinhanh"]["name"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update PHONG set MA_LOAIPHONG='$MA_LOAIPHONG',TENPHONG='$tenphong',DONGIAPHONG='$dongiaphong',MA_CN='$ma_cn',SONGUOITOIDA='$songuoitoida', ANHPHONG='$hinhanh' where MA_PHONG='$ma_phong'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=11");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>

