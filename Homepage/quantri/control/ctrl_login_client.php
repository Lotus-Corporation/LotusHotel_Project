<?php 
session_start();
$username=$_POST["username"];
$pass=$_POST["pass"];
$link=new mysqli("localhost","root","","khachsan");
$sql="select * from KHACHHANG_ACCOUNT where username='$username' and pass='$pass'";
if ($link->query($sql)->num_rows==1)
    {
        header("location:../../index_menu.php");
        $_SESSION['user_client']=$username;
    } else {
        echo "<script>
        alert('SAI MẬT KHẨU HOẶC TÊN ĐĂNG NHẬP');
        setTimeout(function(){
            window.location.href = '../../view/login.php';
        }, 50);
    </script>";

    }
?>