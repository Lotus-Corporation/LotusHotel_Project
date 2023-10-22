<?php 
if(isset($_REQUEST['MA_KH']) and $_REQUEST['MA_KH']!=""){
    $ma = $_GET["MA_KH"];
    $link = new mysqli("localhost", "root", "", "khachsan");
    $link->query("SET foreign_key_checks = 0");
    $sql = "DELETE FROM KHACHHANG WHERE MA_KH='$ma'";
    if ($link->query($sql) === TRUE) {
        echo "Xoá thành công!";
        header("location:../index_menu_admin.php?pid=20");
    } else {
        echo "Xóa thất bại! " . $link->error;
    }

    $link->query("SET foreign_key_checks = 1");

    $link->close();
} else {
    echo "SAI CÚ PHÁP";
}
?>
