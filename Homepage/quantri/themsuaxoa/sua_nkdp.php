<?php 
    $ma_nkdp = $_GET['MA_NKDP'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from NHATKIDATPHONG where MA_NKDP='$ma_nkdp'";
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
        height: 80%
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
   <div class="danhmuc"><h2 style="margin :1%0%02%">Sửa nhật kí đặt phòng</h2>
      <form method="post" action="../control/ctrl_sua_nkdp.php">
         <div>
            <label>Mã nhật kí đặt phòng:</label><br>
            <input type="text" name="MA_NKDP" value="<?php echo $row['MA_NKDP']; ?>" readonly>
         </div>
         <div>
            <label>Mã khách hàng</label><br>
            <input type="text" name="MA_KH" value="<?php echo $row['MA_KH']; ?>">
         </div>
         <div>
            <label>Ngày đặt phòng</label><br>
            <input type="date" name="NGAYDAT" value="<?php echo $row['NGAYDAT']; ?>">
         </div>
         <div>
            <label>Ngày trả phòng</label><br>
            <input type="date" name="NGAYTRAPHONG" value="<?php echo $row['NGAYTRAPHONG']; ?>">
         </div>
         <div class="date-input">
            <label>Trạng thái phòng</label><br>
            <input type="text" name="TRANGTHAI" value="<?php echo $row['TRANGTHAI']; ?>">
         </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
