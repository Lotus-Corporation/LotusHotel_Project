<?php 
    $ma_nksddv = $_GET['MA_NKSD_DICHVU'];
    $ma_kh = $_GET['ma_kh'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from NKSD_DICHVU where MA_NKSD_DICHVU='$ma_nksddv'";
    $sql_kh="select* from KHACHHANG ";
    $result=$link->query($sql);
    $result_kh=$link->query($sql_kh);
    $row=$result->fetch_assoc();
?>


<style>
    .layout_danhmuc{
        width: 70%; 
        position: absolute; 
        top: 10%;
        right: 5%; 
        background-color: rgb(253, 245, 233);
        height: 60%
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
   <div class="danhmuc"><h2 style="margin :1%0%02%">Sửa nhật kí sử dụng dịch vụ</h2>
      <form method="post" enctype="multipart/form-data" action="control/ctrl_sua_nksddv.php">
         <div>
            <label>Mã nhật kí sử dụng dịch vụ</label><br>
            <input type="text" name="ma_nksddv" value="<?php echo $row['MA_NKSD_DICHVU']; ?>" readonly>
         </div>
         <div>
                <label>Mã khách hàng</label><br>
                <select name="ma_kh">
                    <?php 
                    while($row_kh=$result_kh->fetch_assoc()){
                        $selected = '';
                        if ($row_kh["MA_KH"] == $ma_kh) {
                            $selected = 'selected="selected"';
                        }
                    ?>
                    <option value=<?php echo $row_kh["MA_KH"]?> <?php echo $selected ?>><?php echo $row_kh["MA_KH"]?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
