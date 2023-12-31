<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from nhatkidatphong";
    $sql_phong="select * from phong";
    $result=$link->query($sql);
    $result_phong=$link->query($sql_phong);
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
    <div class="danhmuc"><h2 style="margin: 1% 0 0 2%"> Thêm  chi tiết nhật kí đặt phòng </h2>
        <form method="post" enctype="multipart/form-data" action="control/ctrl_them_ctnkdp.php">
            <div>
                <label>Mã chi tiết nhật kí đặt phòng</label><br>
                <input type="text" name="ma_ctnkdp">
            </div>
            <div>
                <label>Mã nhật kí đặt phòng</label><br>
                <select name="ma_nkdp">
                    <?php 
                    while($row=$result->fetch_assoc()){
                    ?>
                    <option value=<?php echo $row["MA_NKDP"]?>><?php echo $row["MA_NKDP"]?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>
            <div>
                <label>Mã phòng</label><br>
                <select name="ma_phong">
                    <?php 
                    while($row_phong=$result_phong->fetch_assoc()){
                    ?>
                    <option value=<?php echo $row_phong["MA_PHONG"]?>><?php echo $row_phong["MA_PHONG"]?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>
            <div>
                <label>Đơn giá phòng</label><br>
                <input type="text" name="dongia">
            </div>
            <button type="submit">Lưu</button>
        </form>
    </div>
</div>