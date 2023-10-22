<?php 
$ma_nkdp=$_POST["ma_nkdp"];
$ma_kh=$_POST["ma_kh"];
$ngaydat=$_POST["ngaydat"];
$ngaytraphong=$_POST["ngaytraphong"];
$trangthai=$_POST["trangthai"];
$link=new mysqli("localhost","root","","khachsan");
$sql="update NHATKIDATPHONG set MA_KH='$ma_kh',NGAYDAT='$ngaydat',NGAYTRAPHONG='$ngaytraphong',TRANGTHAI='$trangthai' where MA_NKDP='$ma_nkdp'";
if ($link->query($sql) === TRUE) {
   header("location:../index_menu_admin.php?pid=12");
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $link->error;
}
?>
