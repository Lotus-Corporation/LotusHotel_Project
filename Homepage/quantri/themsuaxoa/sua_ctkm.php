<?php 
    $ma_ctkm = $_GET['MA_CTKM'];
    $ma_lp = $_GET['ma_lp'];
    $ma_dv = $_GET['ma_dv'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from CHITIETKHUYENMAI where MA_CTKM='$ma_ctkm'";
    $result=$link->query($sql);
    $row=$result->fetch_assoc();

    $sql_hd="select * from hoadon";
    $result_hd=$link->query($sql_hd);

    $sql_km="select * from khuyenmai";
    $result_km=$link->query($sql_km);

    $sql_lp="select* from LOAIPHONG ";
    $result_lp=$link->query($sql_lp);

    $sql_dv="select* from DICHVU ";
    $result_dv=$link->query($sql_dv);
?>
<style>
    .layout_danhmuc{
        width: 70%; 
        position: absolute; 
        top: 10%;
        right: 5%; 
        background-color: rgb(253, 245, 233);
        height: 110%
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
        width: 60%;
        height: 30px;
        font-size: 15px;
        margin-top: 25px;
        border: solid 2px ;
    }
    button{
        padding: 15px 40px;
        border: none;
        background-color: rgb(234, 159, 85);
        border-radius: 10px;
        cursor: pointer;
        float: right;
        margin-right: 18%;
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
      <form method="post" enctype="multipart/form-data" action="control/ctrl_sua_ctkm.php">
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
                <select name="MA_LOAIPHONG">
                    <?php 
                    while($row_lp=$result_lp->fetch_assoc()){
                        $selected = '';
                        if ($row_lp["MA_LOAIPHONG"] == $ma_lp) {
                            $selected = 'selected="selected"';
                        }
                    ?>
                    <option value=<?php echo $row_lp["MA_LOAIPHONG"]?> <?php echo $selected ?>><?php echo $row_lp["MA_LOAIPHONG"]?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>
             <div>       
         <label>Mã Dịch Vụ </label><br>
                <select name="ma_dv">
                    <?php 
                    while($row_dv=$result_dv->fetch_assoc()){
                        $selected = '';
                        if ($row_lp["MA_DV"] == $ma_dv) {
                            $selected = 'selected="selected"';
                        }
                    ?>
                    <option value=<?php echo $row_dv["MA_DV"]?> <?php echo $selected ?>><?php echo $row_dv["MA_DV"]?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>
            <
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
