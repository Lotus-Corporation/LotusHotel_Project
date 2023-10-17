<?php 
$ma_nkdp=$_POST["MA_NKDP"];
$MA_KH=$_POST["MA_KH"];
$NGAYDAT=$_POST["NGAYDAT"];
$NGATRAPHONG=$_POST["NGAYTRAPHONG"];
$TRANGTHAI=$_POST["TRANGTHAI"];
$link=new mysqli("localhost","root","","khachsan");
$sql="insert into NHATKIDATPHONG(MA_NKDP,MA_KH,NGAYDAT,NGAYTRAPHONG,TRANGTHAI)
values ('$MA_NKDP','$MA_KH','$NGAYDAT','$NGAYTRAPHONG','$TRANGTHAI')";
if ($link->query($sql) === TRUE) {
    echo "Thêm dữ liệu thành công";
  } else {
    echo "Thêm dữ liệu thất bại <br> Lỗi: " . $sql . "<br>" . $link->error;
  }
?>