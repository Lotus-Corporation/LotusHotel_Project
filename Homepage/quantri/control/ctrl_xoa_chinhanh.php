<?php 
if(isset($_REQUEST['ma_cn']) and $_REQUEST['ma_cn']!=""){
    $ma = $_POST["ma_cn"];
    $link = new mysqli("localhost", "root", "", "khachsan");
    $link->query("SET foreign_key_checks = 0");
    $sql = "DELETE FROM chinhanh WHERE ma_cn='$ma'";
    if ($link->query($sql) === TRUE) {
        echo "Xoá thành công!";
        header("location:../index_menu_admin.php?pid=11");
    } else {
        echo "Xóa thất bại! " . $link->error;
    }

    $link->query("SET foreign_key_checks = 1");

    $link->close();
} else {
    echo "SAI CÚ PHÁP";
}
?>
