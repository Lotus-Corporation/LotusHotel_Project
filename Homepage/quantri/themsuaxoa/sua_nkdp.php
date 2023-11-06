<?php 
    $ma_nkdp = $_GET['MA_NKDP'];
    $ma_kh = $_GET['ma_kh'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from NHATKIDATPHONG where MA_NKDP='$ma_nkdp'";
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
        height: 900px
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
   <div class="danhmuc"><h2 style="margin :1% 0 0 2%">Sửa nhật kí đặt phòng</h2>
      <form method="post" action="control/ctrl_sua_nkdp.php">
         <div>
            <label>Mã nhật kí đặt phòng:</label><br>
            <input type="text" name="MA_NKDP" value="<?php echo $row['MA_NKDP']; ?>" readonly>
         </div>
         <div>
                <label>Mã khách hàng</label><br>
                <select name="MA_KH">
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
         <div>
            <label>Ngày đặt phòng</label><br>
            <input type="date" name="NGAYDAT" value="<?php echo $row['NGAYDAT']; ?>">
         </div>
         <div>
            <label>Ngày trả phòng</label><br>
            <input type="date" name="NGAYTRAPHONG" value="<?php echo $row['NGAYTRAPHONG']; ?>">
         </div>
         <div >
            <label>Tổng tiền phòng</label><br>
            <input type="text" name="TONGTIENPHONG" value="<?php echo $row['TONGTIENPHONG']; ?>">
         </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
