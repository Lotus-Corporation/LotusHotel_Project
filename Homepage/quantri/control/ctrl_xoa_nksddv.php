<?php 
if(isset($_REQUEST['MA_NKSD_DICHVU']) and $_REQUEST['MA_NKSD_DICHVU']!=""){
    $ma = $_GET["MA_NKSD_DICHVU"];
    $link = new mysqli("localhost", "root", "", "khachsan");
    $link->query("SET foreign_key_checks = 0");
    $sql = "DELETE FROM NKSD_DICHVU WHERE MA_NKSD_DICHVU='$ma'";
    if ($link->query($sql) === TRUE) {
        echo "Xoá thành công!";
        header("location:../index_menu_admin.php?pid=15");
    } else {
        echo "Xóa thất bại! " . $link->error;
    }

    $link->query("SET foreign_key_checks = 1");

    $link->close();
} else {
    echo "SAI CÚ PHÁP";
}
?>
