<?php 
if(isset($_REQUEST['MA_CTKM']) and $_REQUEST['MA_CTKM']!=""){
    $ma = $_GET["MA_CTKM"];
    $link = new mysqli("localhost", "root", "", "khachsan");
    $link->query("SET foreign_key_checks = 0");
    $sql = "DELETE FROM CHITIETKHUYENMAI WHERE MA_CTKM='$ma'";
    if ($link->query($sql) === TRUE) {
        echo "Xoá thành công!";
        header("location:../index_menu_admin.php?pid=17");
    } else {
        echo "Xóa thất bại! " . $link->error;
    }

    $link->query("SET foreign_key_checks = 1");

    $link->close();
} else {
    echo "SAI CÚ PHÁP";
}
?>
