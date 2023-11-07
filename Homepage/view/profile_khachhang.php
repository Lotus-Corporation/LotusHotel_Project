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
    a{
        text-decoration: none;
        font-size: 20px;
        color: black;
        position: absolute;
        right:5%;
        top:2%
    }
    button{
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
<div class="profile">
    YOUR 
    PROFILE
    <a href="../index_menu.php">Trang chủ</a>
</div>
<div class="layout_anhdaidien">
<div class="anhdaidien">
    <img id="imagePreview" src= "https://th.bing.com/th/id/R.4aa4dc7ee7e3f768154414f8e5dd38e7?rik=zLGtysN4C3BIeQ&pid=ImgRaw&r=0">
    <input style="border:none" id="imageUpload" type="file">
</div>
</div>

<div class="layout">
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
                <div>
                    <label for="username">Username</label><br>
                    <input type="text" name="username"value="<?php echo $row['USERNAME'] ?>" readonly>
                </div>
                <div>
                    <label>Họ tên</label><br>
                    <input type="text" id="name" value="<?php echo $row['HOTEN'] ?>"readonly>
                </div>
                <div>
                    <label>Email</label><br>
                    <input type="text" id="email" value="<?php echo $row['EMAIL'] ?>"readonly>
                </div>
                <div>
                    <label>Số điện thoại</label><br>
                    <input type="text" id="phone" value="<?php echo $row['SDT']; ?>"readonly>
                </div>
    
                <div>
                    <label>CCCD</label><br>
                    <input type="text" id="cccd" value="<?php echo $row['CCCD']; ?>"readonly>
</div>
<?php
  }
  ?>
  <div>
                    <label for="address">Địa chỉ</label><br>
                    <input type="text" id="address" readonly>
                </div>
                <div>
                    <label for="country">Quốc gia</label><br>
                    <select>
                        <option>Việt Nam</option>
                        <option>Lào</option>
                        <option>Campuchia</option>
                        <option>Anh</option>
                        <option>Canada</option>
                    </select>
                </div>
                <button type="submit" onclick="editProfile()">Sửa</button>
    </div>
    
    

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