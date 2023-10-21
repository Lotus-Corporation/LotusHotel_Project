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
$sql="insert into khuyenmai(MA_KM,NGAYBATDAU,NGAYKETTHUC,TENKM,MOTA,HINHANHKM)
values ('$ma_km','$ngaybatdau','$ngayketthuc','$ten_km','$mota','$hinhanh')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=17 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>