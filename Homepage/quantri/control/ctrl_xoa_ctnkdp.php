<?php 
if(isset($_REQUEST['ma_ctnkdp']) and $_REQUEST['ma_ctnkdp']!=""){
    $ma = $_GET["ma_ctnkdp"];
    $link = new mysqli("localhost", "root", "", "khachsan");
    $link->query("SET foreign_key_checks = 0");
    $sql = "DELETE FROM CHITIETNHATKIDATPHONG WHERE ma_ctnkdp='$ma'";
    if ($link->query($sql) === TRUE) {
        echo "Xoá thành công!";
        header("location:../index_menu_admin.php?pid=13");
    } else {
        echo "Xóa thất bại! " . $link->error;
    }

    $link->query("SET foreign_key_checks = 1");

    $link->close();
} else {
    echo "SAI CÚ PHÁP";
}
?>
