<?php 
if(isset($_REQUEST['ma_cn']) and $_REQUEST['ma_cn']!=""){
    $ma = $_POST["ma_cn"];
    $link = new mysqli("localhost", "root", "", "khachsan");
    $sql = "DELETE FROM chinhanh WHERE ma_cn='$ma'";
    if ($link->query($sql) === TRUE) {
        echo "Xoá thành công!";
    } else {
        echo "Xóa thất bại! " . $link->error;
    }
    $link->close();
} else {
    echo "làm sai đợi cô chỉ :))";
}
?>