<?php 
session_start();
if(isset($_SESSION['user'])){
    unset($_SESSION['user']);
    header("location:../ADMIN.php");
} else echo 'That bai'
?>
<?php 
session_start();
if(isset($_SESSION['user_client'])){
    unset($_SESSION['user_client']);
    echo "<script>
        alert('ĐĂNG XUẤT THÀNH CÔNG!');
        setTimeout(function(){
            window.location.href = '../../index_menu.php';
        }, 50);
    </script>";
    
} else echo 'That bai'
?>