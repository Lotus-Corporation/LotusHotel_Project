<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql_nv="select * from NHANVIEN";
    $sql_pttt="select * from PTTT";
    $sql_kh="select * from KHACHHANG";
    $sql_nkdp="select * from NHATKIDATPHONG";
    $sql_nksddv="select * from NKSD_DICHVU";
    $result_nv=$link->query($sql_nv);
    $result_pttt=$link->query($sql_pttt);
    $result_kh=$link->query($sql_kh);
    $result_nkdp=$link->query($sql_nkdp);
    $result_nksddv=$link->query($sql_nksddv);
?>
<style>
    .layout_danhmuc{
        width: 70%; 
        position: absolute; 
        top: 10%;
        right: 5%; 
        background-color: rgb(253, 245, 233);
        height: 1000px
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
    <div class="danhmuc"><h2 style="margin: 1% 0 0 2%"> Thêm Hóa Đơn </h2>
        <form method="post" enctype="multipart/form-data" action="control/ctrl_them_hoadon.php">
            <div>
                <label>Mã hóa đơn</label><br>
                <input type="text" name="ma_hd">
            </div>
            <div>
                <label>Nhân Viên</label><br>
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
                <label>Khách Hàng</label><br>
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
                <label>Mã Nhật Kí Đặt Phòng</label><br>
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
                <label>Mã Nhật Kí Sử Dụng Dịch Vụ</label><br>
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
                <input type="date" name="ngaylaphoadon">
            </div>
            <div>
                <label>Tổng tiền</label><br>
                <input type="text" name="tongtien">
            </div>
            <button type="submit">Lưu</button>
        </form>
    </div>
</div>