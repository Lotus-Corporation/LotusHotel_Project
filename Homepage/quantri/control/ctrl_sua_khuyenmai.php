<?php 
$thu_muc="../../img/khuyenmai/";
$ten_files=$thu_muc . $_FILES["hinhanh"]["name"];
move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$ten_files);

$ma_km=$_POST["ma_km"];
$ngaybatdau=$_POST["ngaybatdau"];
$ngayketthuc=$_POST["ngayketthuc"];
$ten_km=$_POST["ten_km"];
$mota=$_POST["mota"];
$hinhanh=$_FILES["hinhanh"]["name"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update KHUYENMAI set NGAYBATDAU='$ngaybatdau',NGAYKETTHUC='$ngayketthuc',TENKM='$ten_km',MOTA='$mota',HINHANHKM='$hinhanh' where MA_KM='$ma_km'";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=17");
 } else {
    echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
 }
?>

