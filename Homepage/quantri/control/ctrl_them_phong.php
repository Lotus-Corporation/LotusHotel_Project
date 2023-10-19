<?php 
$thu_muc="../../img/phong/";
$ten_files=$thu_muc . $_FILES["hinhanh"]["name"];
move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$ten_files);
 
$ma_phong=$_POST["ma_phong"];
$ma_lp=$_POST["ma_lp"];
$tenphong=$_POST["tenphong"];
$dongiaphong=$_POST["dongiaphong"];
$ma_cn=$_POST["ma_cn"];
$songuoitoida=$_POST["songuoitoida"];
$hinhanh=$_FILES["hinhanh"]["name"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into phong(MA_PHONG,MA_LOAIPHONG,TENPHONG,DONGIAPHONG,MA_CN,SONGUOITOIDA,ANHPHONG)
values ('$ma_phong','$ma_lp','$tenphong','$dongiaphong','$ma_cn','$songuoitoida','$hinhanh')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=20 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>