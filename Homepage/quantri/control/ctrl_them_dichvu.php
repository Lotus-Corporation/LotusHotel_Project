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
$sql="insert into dichvu(MA_DV,TENDV,DONGIADV,DONVITINH,HINHANHDV)
values ('$ma_dv','$ten_dv','$dongia','$donvitinh','$hinhanh')";
if ($link->query($sql) === TRUE) {
    header("location:../index_menu_admin.php?pid=16 ");
  } else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
  }
?>