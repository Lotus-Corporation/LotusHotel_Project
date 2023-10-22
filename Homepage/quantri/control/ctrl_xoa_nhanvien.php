<?php 
if(isset($_REQUEST['MA_NV']) and $_REQUEST['MA_NV']!=""){
    $ma = $_GET["MA_NV"];
    $link = new mysqli("localhost", "root", "", "khachsan");
    $link->query("SET foreign_key_checks = 0");
    $sql = "DELETE FROM NHANVIEN WHERE MA_NV='$ma'";
    if ($link->query($sql) === TRUE) {
        echo "Xoá thành công!";
        header("location:../index_menu_admin.php?pid=19");
    } else {
        echo "Xóa thất bại! " . $link->error;
    }

    $link->query("SET foreign_key_checks = 1");

    $link->close();
} else {
    echo "SAI CÚ PHÁP";
}
?>
