<?php 
$ma_km=$_POST["ma_km"];
$ngaybatdau=$_POST["ngaybatdau"];
$ngayketthuc=$_POST["ngayketthuc"];
$ten_km=$_POST["tenkm"];
$mota=$_POST["mota"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update KHUYENMAI set NGAYBATDAU='$ngaybatdau',NGAYKETTHUC='$ngayketthuc',TENKM='$ten_km',MOTA='$mota' where MA_KM='$ma_km'";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=17");
 } else {
    echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
 }
?>
