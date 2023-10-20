<?php 
if(isset($_REQUEST['MA_CT_NKSDDV']) and $_REQUEST['MA_CT_NKSDDV']!=""){
    $ma = $_GET["MA_CT_NKSDDV"];
    $link = new mysqli("localhost", "root", "", "khachsan");
    $link->query("SET foreign_key_checks = 0");
    $sql = "DELETE FROM CHITIET_NKSDDV WHERE MA_CT_NKSDDV='$ma'";
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
