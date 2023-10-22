<?php 
    $ma_km = $_GET['MA_KM'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from KHUYENMAI where MA_KM='$ma_km'";
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
   <div class="danhmuc"><h2 style="margin :1%0%02%">Sửa khuyến mãi</h2>
      <form method="post" enctype="multipart/form-data" action="../control/ctrl_sua_khuyenmai.php">
         <div>
            <label>Mã khuyến mãi</label><br>
            <input type="text" name="ma_km" value="<?php echo $row['MA_KM']; ?>" readonly>
         </div>
         <div>
            <label>Ngày bắt đầu</label><br>
            <input type="date" name="ngaybatdau" value="<?php echo $row['NGAYBATDAU']; ?>">
         </div>
         <div>
            <label>Ngày kết thúc</label><br>
            <input type="date" name="ngayketthuc" value="<?php echo $row['NGAYKETTHUC']; ?>">
         </div>
         <div>
            <label>Tên khuyến mãi</label><br>
            <input type="text" name="ten_km" value="<?php echo $row['TENKM']; ?>">
         </div>
         <div>
            <label>Mô tả</label><br>
            <input type="text" name="mota" value="<?php echo $row['MOTA']; ?>">
         </div>
         <div>
            <label>Hình Ảnh</label><br> 
            <input style="border:none" type="file" name="hinhanh">
         </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
