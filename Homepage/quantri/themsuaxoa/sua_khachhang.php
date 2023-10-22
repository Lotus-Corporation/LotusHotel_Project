<?php 
    $ma_kh = $_GET['MA_KH'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from KHACHHANG where MA_KH='$ma_kh'";
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
   <div class="danhmuc"><h2 style="margin :1%0%02%">Sửa khách hàng</h2>
      <form method="post" enctype="multipart/form-data" action="control/ctrl_sua_khachhang.php">
         <div>
            <label>Mã khách hàng</label><br>
            <input type="text" name="ma_kh" value="<?php echo $row['MA_KH']; ?>" readonly>
         </div>
         <div>
            <label>Họ tên</label><br>
            <input type="text" name="hoten" value="<?php echo $row['HOTEN']; ?>">
         </div>
         <div>
            <label>SĐT</label><br>
            <input type="text" name="sdt" value="<?php echo $row['SDT']; ?>">
         </div>
         <div>
            <label>CCCD</label><br>
            <input type="text" name="cccd" value="<?php echo $row['CCCD']; ?>">
         </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
