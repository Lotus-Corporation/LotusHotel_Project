<?php 
$MA_NKDP=$_POST["MA_NKDP"];
$MA_KH=$_POST["MA_KH"];
$NGAYDAT=$_POST["NGAYDAT"];
$NGAYTRAPHONG=$_POST["NGAYTRAPHONG"];
$TRANGTHAI=$_POST["TRANGTHAI"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into NHATKIDATPHONG(MA_NKDP,MA_KH,NGAYDAT,NGAYTRAPHONG,TRANGTHAI)
values ('$MA_NKDP','$MA_KH','$NGAYDAT','$NGAYTRAPHONG','$TRANGTHAI')";
if ($link->query($sql) === TRUE) {
  header("location:../index_menu_admin.php?pid=12 ");
} else {
  echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
}
?>