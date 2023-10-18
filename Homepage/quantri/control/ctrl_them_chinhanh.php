<?php 
$thu_muc="../../img/chinhanh/";
$ten_files=$thu_muc . $_FILES["hinhanh"]["name"];
move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$ten_files);

$ma_cn=$_POST["ma_cn"];
$tinhthanh=$_POST["tinhthanh"];
$diachi=$_POST["diachi"];
$sdt=$_POST["sdt"];
$ma_nv=$_POST["ma_qli"];
$hinhanh=$_FILES["hinhanh"]["name"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into chinhanh(ma_cn,diachi,tinhthanh,sdt,ma_nv,hinhanh)
values ('$ma_cn','$tinhthanh','$diachi','$sdt','$ma_nv','$hinhanh')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=11");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>