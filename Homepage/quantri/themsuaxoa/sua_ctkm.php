<?php 
    $ma_ctkm = $_GET['MA_CTKM'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from CHITIETKHUYENMAI where MA_CTKM='$ma_ctkm'";
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
        width:60%;
        height:30px;
        font-size :15px;
        margin-top :25px;
        border :solid2px ;
    }

    .layout_danhmuc{
        width: 75%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        right:2%; 
        top:10%;
        height: 2400px;
    }
    .danhmuc{
        width: 100%;
        height: 70px;
        background-color: gray;
        border-radius: 10px 10px 0 0;
        position: absolute;
        top:2px;
    }
    button{
        padding: 15px 35px;
        position: absolute;
        right: 2%;
        top: 82px;
        border: none;
        background-color: rgb(210, 168, 84);
        border-radius: 10px;
        cursor: pointer;
    }
    button:hover{
        background-color: rgb(161, 110, 7);
    }
    table{ 
        width: 95%; 
        margin: 8% 10% 0 3%; 
        border-radius: 10px;
        border-spacing: 0;
        border-collapse: separate; 
        border-radius: 7px;

    }
   
    th{
       background-color: gray;
       padding: 10px;

    }

    td{
        background-color:antiquewhite;
        border-style:outset;
        padding: 10px;
        border-radius: 7px;

    }
   
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: brown;
    }
</style>

<div class="layout_danhmuc"> 
   <div class="danhmuc"><h2 style="margin :2%0%02%">Sửa chi tiết khuyến mãi</h2>
      <form method="post" enctype="multipart/form-data" action="../control/ctrl_sua_ctkm.php">
         <div>
            <label>Mã chi tiết khuyến mãi</label><br>
            <input type="text" name="ma_ctkm" value="<?php echo $row['MA_CTKM']; ?>" readonly>
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
         <div>
            <label>Giá trị</label><br>
            <input type="text" name="giatri" value="<?php echo $row['GIATRI']; ?>">
         </div>
         <div>
            <label>Mã loại phòng</label><br>
            <input type="text" name="ma_lp" value="<?php echo $row['MA_LOAIPHONG']; ?>">
         </div>
         <div>
            <label>Mã dịch vụ</label><br>
            <input type="text" name="ma_dv" value="<?php echo $row['MA_DV']; ?>">
         </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
