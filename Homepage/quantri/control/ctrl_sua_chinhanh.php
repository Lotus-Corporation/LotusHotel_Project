<?php 
    $thu_muc="../../img/chinhanh/";
    $ten_files=$thu_muc . $_FILES["hinhanh"]["name"];
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$ten_files);
    
    $macn=$_POST["macn"];
    $tinhthanh=$_POST["tinhthanh"];
    $diachi=$_POST["diachi"];
    $sdt=$_POST["sdt"];
    $ma_nv=$_POST["ma_qli"];
    $hinhanh=$_FILES["hinhanh"]["name"];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="UPDATE chinhanh SET diachi='$diachi',tinhthanh='$tinhthanh',sdt='$sdt',ma_nv='$ma_nv',hinhanh='$hinhanh' where ma_cn='$macn'";
    
    if ($link->query($sql) === TRUE) {
        header("location:../index_menu_admin.php?pid=22");
    } else {
        echo "Cập nhật thất bại! " . $link->error;
    }

?>

