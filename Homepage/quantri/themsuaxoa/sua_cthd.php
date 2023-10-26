<?php 
    $ma_cthd = $_GET['MA_CTHD'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from CHITIETHOADON where MA_CTHD='$ma_cthd'";
    $result=$link->query($sql);
    $row=$result->fetch_assoc();

    $sql_hd="select * from hoadon";
    $result_hd=$link->query($sql_hd);

    $sql_km="select * from khuyenmai";
    $result_km=$link->query($sql_km);
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
        display: flex;
        flex-wrap: wrap;
    }
    form >div{
        margin: 0 5% 7.5% 0%;
        background-color:rgb(251, 231, 206);
        font-size: 17px;
        padding: 0 35px 25px 35px;
        float: left;
        border-radius: 10px;
        flex-basis: 35%;
    }
    input {
        width: 70%;
        height: 30px;
        font-size: 15px;
        margin-top: 25px;
        border: solid 2px ;
    }
    label{
        background-color: rgb(250, 204, 148);
        padding:13px;
        border-radius: 10px;
    }
    div >select{
        width: 60%;
        height: 30px;
        font-size: 15px;
        margin-top: 25px;
        border: solid 2px
    }
    button{
        padding: 15px 40px;
        border: none;
        background-color: rgb(234, 159, 85);
        border-radius: 10px;
        cursor: pointer;
        float: right;
        margin-right: 18%;
        width: 10%;
        height: 10%;
       
    }
    button:hover{
        background-color: rgb(161, 110, 7);
    }
</style>
<div class="layout_danhmuc">
   <div class="danhmuc"><h2 style="margin :1%0%02%">Sửa chi tiết hóa đơn</h2>
      <form method="post" enctype="multipart/form-data" action="control/ctrl_sua_cthd.php">
         <div>
            <label>Mã chi tiết hóa đơn</label><br>
            <input type="text" name="ma_cthd" value="<?php echo $row['MA_CTHD']; ?>" readonly>
         </div>
         <div>
            <label>Mã hóa đơn</label><br>
            <select name="ma_hd">
               <?php 
               while($row_hd=$result_hd->fetch_assoc()){
               ?>
               <option value=<?php echo $row_hd["MA_HD"]?>><?php echo $row_hd["NGAYLAP_HD"]?></option>
               <?php 
               }
               ?>
            </select>
         </div>
         <div>
            <label>Mã khuyến mãi</label><br>
            <select name="ma_km">
               <?php 
               while($row_km=$result_km->fetch_assoc()){
               ?>
               <option value=<?php echo $row_km["MA_KM"]?>><?php echo $row_km["TENKM"]?></option>
               <?php 
               }
               ?>
            </select>
         </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
