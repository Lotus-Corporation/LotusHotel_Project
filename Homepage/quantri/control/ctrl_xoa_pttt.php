<?php 
if(isset($_REQUEST['ma_pttt']) and $_REQUEST['ma_pttt']!=""){
    $ma = $_GET["ma_pttt"];
    $link = new mysqli("localhost", "root", "", "khachsan");
    $link->query("SET foreign_key_checks = 0");
    $sql = "DELETE FROM pttt WHERE ma_pttt='$ma'";
    if ($link->query($sql) === TRUE) {
        echo "Xoá thành công!";
        header("location:../index_menu_admin.php?pid=23");
    } else {
        echo "Xóa thất bại! " . $link->error;
    }

    $link->query("SET foreign_key_checks = 1");

    $link->close();
} else {
    echo "SAI CÚ PHÁP";
}
?>
