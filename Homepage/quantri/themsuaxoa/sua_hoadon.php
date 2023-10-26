<?php 
    $ma_hd = $_GET['MA_HD'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from HOADON where MA_HD='$ma_hd'";
    $result=$link->query($sql);
    $row=$result->fetch_assoc();

    $sql_nv="select * from NHANVIEN";
    $result_nv=$link->query($sql_nv);

    $sql_pttt="select * from PTTT";
    $result_pttt=$link->query($sql_pttt);

    $sql_kh="select * from KHACHHANG";
    $result_kh=$link->query($sql_kh);

    $sql_nkdp="select * from NHATKIDATPHONG";
    $result_nkdp=$link->query($sql_nkdp);

    $sql_nksddv="select * from NKSD_DICHVU";
    $result_nksddv=$link->query($sql_nksddv);
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
   <div class="danhmuc"><h2 style="margin :1%0%02%">Sửa hóa đơn</h2>
      <form method="post" enctype="multipart/form-data" action="control/ctrl_sua_hoadon.php">
         <div>
            <label>Mã hóa đơn</label><br>
            <input type="text" name="ma_hd" value="<?php echo $row['MA_HD']; ?>" readonly>
         </div>
         <div>
            <label>Nhân viên</label><br>
            <select name="ma_nv">
               <?php 
               while($row_nv=$result_nv->fetch_assoc()){
               ?>
               <option value=<?php echo $row_nv["MA_NV"]?>><?php echo $row_nv["HOTEN"]?></option>
               <?php 
               }
               ?>
            </select>
         </div>
         <div>
            <label>PTTT</label><br>
            <select name="ma_pttt">
               <?php 
               while($row_pttt=$result_pttt->fetch_assoc()){
               ?>
               <option value=<?php echo $row_pttt["MA_PTTT"]?>><?php echo $row_pttt["LOAIPTTT"]?></option>
               <?php 
               }
               ?>
            </select>
         </div>
         <div>
            <label>Khách hàng</label><br>
            <select name="ma_kh">
               <?php 
               while($row_kh=$result_kh->fetch_assoc()){
               ?>
               <option value=<?php echo $row_kh["MA_KH"]?>><?php echo $row_kh["HOTEN"]?></option>
               <?php 
               }
               ?>
            </select>
         </div>
         <div>
            <label>Mã nhật kí đặt phòng</label><br>
            <select name="ma_nkdp">
               <?php 
               while($row_nkdp=$result_nkdp->fetch_assoc()){
               ?>
               <option value=<?php echo $row_nkdp["MA_NKDP"]?>><?php echo $row_nkdp["MA_NKDP"]?></option>
               <?php 
               }
               ?>
            </select>
         </div>
         <div>
            <label>Mã nhật kí sử dụng dịch vụ</label><br>
            <select name="ma_nksddv">
               <?php 
               while($row_nksddv=$result_nksddv->fetch_assoc()){
               ?>
               <option value=<?php echo $row_nksddv["MA_NKSD_DICHVU"]?>><?php echo $row_nksddv["MA_NKSD_DICHVU"]?></option>
               <?php 
               }
               ?>
            </select>
         </div>
         <div>
            <label>Ngày lập hóa đơn</label><br>
            <input type="date" name="ngaylaphoadon" value="<?php echo $row['NGAYLAP_HD']; ?>">
         </div>
         <div>
            <label>Tổng tiền</label><br>
            <input type="text" name="tongtien" value="<?php echo $row['TONGTIEN']; ?>">
         </div>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
