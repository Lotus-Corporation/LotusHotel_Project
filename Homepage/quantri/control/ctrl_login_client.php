<?php 
session_start();
$username=$_POST["username"];
$pass=$_POST["pass"];
$link=new mysqli("localhost","root","","khachsan");
$sql="select * from KHACHHANG_ONLINE where username='$username' and pass='$pass'";
if ($link->query($sql)->num_rows==1)
    {
        header("location:../../index_menu.php");
        $_SESSION['user_client']=$username;
    } else {
        echo "Sai mật khẩu hoặc tên đăng nhập. " . $link->error;
    }
?>