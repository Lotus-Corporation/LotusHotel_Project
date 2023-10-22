<?php 
    $username = $_GET['USERNAME'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from KHACHHANG_ONLINE where USERNAME='$username'";
    $result=$link->query($sql);
    $row=$result->fetch_assoc();
?>
<style>
    .layout_danhmuc{
        width: 70%; 
        position: absolute; 
        top: 10%;
        right: 5%; 
        background-color: rgb(253, 245, 233);
        height: 100%
    }
    .danhmuc{
        width: 100%;
        height: 50px;
        background-color: darkgray;
        border-radius: 10px 10px 0 0;
        position: absolute;
        top:0;
    }
    form{
        width: 90%; 
        margin: 5% 0 0 10%;
    }
    form >div{
        margin: 0 7.5% 5% 0%;
        background-color:rgb(251, 231, 206);
        font-size: 17px;
        padding: 0 35px 25px 35px;
        float: left;
        width: 35%;
        border-radius: 10px;
    }
    input {
       width :70%;
       height :30px;
       font-size :15px;
       margin-top :25px;
       border :solid2px ;
   }
   label{
      background-color :rgb(250,204,148);
      padding :13px;
      border-radius :10px;
   }
   div >select{
      width :60%;
      height :30px;
      font-size :15px;
      margin-top :25px;
      border :solid2px ;
   }
   button{
      padding :15px 40px;
      border :none;
      background-color :rgb(234,159,85);
      border-radius :10px;
      cursor :pointer;
      float:right;
      margin-right :18%;
   }
   button:hover{
      background-color :rgb(161,110,7);
   }
</style>
<div class="layout_danhmuc"> 
   <div class="danhmuc"><h2 style="margin :1%0%02%">Sửa khách hàng online</h2>
      <form method="post" enctype="multipart/form-data" action="control/ctrl_sua_khachhangonline.php">
         <div>
            <label>Username</label><br>
            <input type="text" name="username" value="<?php echo $row['USERNAME']; ?>" readonly>
         </div>
         <div>
            <label>Họ tên</label><br>
            <input type="text" name="hoten" value="<?php echo $row['HOTEN']; ?>">
         </div>
         <div>
            <label>Email</label><br>
            <input type="text" name="email" value="<?php echo $row['EMAIL']; ?>">
         </div>
         <div>
            <label>SĐT</label><br>
            <input type="text" name="sdt" value="<?php echo $row['SDT']; ?>">
         </div>
         <div>
            <label>Password</label><br>
            <input type="text" name="password" value="<?php echo $row['PASS']; ?>">
         </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
