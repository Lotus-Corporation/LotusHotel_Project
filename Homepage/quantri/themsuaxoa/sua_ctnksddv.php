<?php 
    $ma_ctnksddv = $_GET['MA_CT_NKSDDV'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from CHITIET_NKSDDV where MA_CT_NKSDDV='$ma_ctnksddv'";
    $result=$link->query($sql);
    $row=$result->fetch_assoc();

    $sql_nksddv="select * from NKSD_DICHVU";
    $result_nksddv=$link->query($sql_nksddv);

    $sql_dv="select * from DICHVU";
    $result_dv=$link->query($sql_dv);
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
   <div class="danhmuc"><h2 style="margin :1%0%02%">Sửa chi tiết nhật kí sử dụng dịch vụ</h2>
      <form method="post" enctype="multipart/form-data" action="../control/ctrl_sua_ctnksddv.php">
         <div>
            <label>Mã chi tiết nhật kí sử dụng dịch vụ</label><br>
            <input type="text" name="ma_ctnksddv" value="<?php echo $row['MA_CT_NKSDDV']; ?>" readonly>
         </div>
         <div>
            <label>Mã nhật kí sử dụng dịch vụ</label><br>
            <select name="ma_nksddv">
               <?php 
               while($row_nksddv=$result_nksddv->fetch_assoc()){
               ?>
               <option value=<?php echo $row_nksddv["MA_NKSD_DICHVU"]?>><?php echo $row_nksddv["MA_KH"]?></option>
               <?php 
               }
               ?>
            </select>
         </div>
         <div>
            <label>Mã dịch vụ</label><br>
            <select name="ma_dv">
               <?php 
               while($row_dv=$result_dv->fetch_assoc()){
               ?>
               <option value=<?php echo $row_dv["MA_DV"]?>><?php echo $row_dv["TENDV"]?></option>
               <?php 
               }
               ?>
            </select>
         </div>
         <div>
            <label>Số lượng</label><br>
            <input type="text" name="soluong" value="<?php echo $row['SOLUONG']; ?>">
         </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
