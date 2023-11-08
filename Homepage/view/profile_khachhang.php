<style>
    body{
        margin: 0;
    }
    
    .layout{
        width: 50%;
        background-color:aliceblue;
        position: absolute;
        top:15%;
        right:8%

    }
    .layout > div{
        width: 40%;
        padding:25px;
        float: left;
    }
    input{
            width: 100%;
        padding: 5px 10px;
        border-radius: 5px;
        border: 1px solid gray;
        color: black;
    }
    label{
        margin-left: 10px;
        
    }
    .layout_anhdaidien{
        width: 40%;
    }
    .anhdaidien{
        width: 20%;
        position: absolute;
        top:14%;
        left: 7%;
    }
    select{
        padding:5px 10px;
    }
    img{
        width: 350px;
        height: 350px;
        border-radius: 50%;
    }
    .profile{
        width: 100%;
        height: 50px;
        background-color:aliceblue;
        font-size: 33px;
        font-weight: bold;
        padding: 5px 20px;
        line-height: 1.5;
    }
    .dangxuat,.trangchu{
        text-decoration: none;
        font-size: 20px;
        color: black;
        position: absolute;
        right:4%;
        top:2%
    }
    .trangchu{
        position: absolute;
        right:13%;
        top:2%
    }
    .sua{
        position: absolute;
        bottom: 10%;
        right:27%;
        padding:10px;
        background-color:rgb(167, 215, 249);
        border: none;
        cursor: pointer;
    }
    .capnhat{
        position: absolute;
        bottom: 10%;
        right:10%;
        padding:10px 20px;
        background-color:rgb(167, 215, 249);
        border: none;
        cursor: pointer;   
    }
    button:hover{background-color:rgb(79, 159, 190); color: aliceblue;}
</style>
<div class="profile">YOUR PROFILE
    <a class="trangchu"href="../index_menu.php">Trang chủ</a>
    <a class="dangxuat"href="../quantri/control/ctrl_logout.php">Đăng xuất</a>
</div>
<form method="post" action="" enctype="multipart/form-data">
<input type="hidden" name="form" value="false">
<?php 
session_start();
if(isset($_SESSION['user_client']))
{
    $username = $_SESSION['user_client'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from KHACHHANG_ACCOUNT where USERNAME='$username'";
    $result=$link->query($sql);
    $row = $result->fetch_assoc();
?>
<div class="layout_anhdaidien">
<div class="anhdaidien">
    <img id="imagePreview" src= "../img/khachhang/<?php echo $row["ANHKH"]?>">
    <input style="border:none" name="hinhanh" id="imageUpload" type="file" value="false">
</div>
</div>
<div class="layout">
    <div>
        <label>Username</label><br>
        <input type="text" name="username"value="<?php echo $row['USERNAME'] ?>" readonly>
    </div>
    <div>
        <label>Họ tên</label><br>
        <input type="text" name="hoten" id="name" value="<?php echo $row['HOTEN'] ?>"readonly>
    </div>
    <div>
        <label>Email</label><br>
        <input type="text" name="email" id="email" value="<?php echo $row['EMAIL'] ?>"readonly>
    </div>
    <div>
        <label>Số điện thoại</label><br>
        <input type="text" name="phone" id="phone" value="<?php echo $row['SDT']; ?>"readonly>
    </div>

    <div>
        <label>CCCD</label><br>
        <input type="text" name="cccd" id="cccd" value="<?php echo $row['CCCD']; ?>"readonly>
    </div>
<?php
}
?>
    <button type="button" class="sua" onclick="editProfile()">Sửa</button>
    <button class="capnhat" type="submit">Cập nhật</button>
</div>
</form>
<?php 
if(isset($_POST['form'])){
    $thu_muc="../img/khachhang/";
    $ten_files=$thu_muc . $_FILES["hinhanh"]["name"];
    move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$ten_files);

    $username=$_POST["username"];
    $hoten=$_POST["hoten"];
    $email=$_POST["email"];
    $sdt=$_POST["phone"];
    $cccd=$_POST["cccd"];
    $hinhanh=$_FILES["hinhanh"]["name"];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="update KHACHHANG_ACCOUNT set HOTEN='$hoten',EMAIL='$email',SDT='$sdt',CCCD='$cccd' ,ANHKH='$hinhanh' where USERNAME='$username'";
    if ($link->query($sql) === TRUE) {
        echo "<script>
        alert('CẬP NHẬT THÀNH CÔNG!');
        setTimeout(function(){
            window.location.href = 'profile_khachhang.php';
        }, 50);
    </script>";
    }
}
?>
    

<script>
    document.getElementById("imageUpload").addEventListener("change", function(e) {
        var reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById("imagePreview").src = e.target.result;
        }
        reader.readAsDataURL(this.files[0]);
}   );
function editProfile() {
    document.getElementById('name').readOnly = false;
    document.getElementById('email').readOnly = false;
    document.getElementById('phone').readOnly = false;
    document.getElementById('cccd').readOnly = false;
    document.getElementById('address').readOnly = false;
}
</script>