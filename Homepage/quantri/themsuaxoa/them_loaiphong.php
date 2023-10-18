<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from loaiphong";
    $result=$link->query($sql);
?>
<style>
    .layout_danhmuc{
        width: 70%; 
        position: absolute; 
        top: 10%;
        right: 5%; 
        background-color: rgb(253, 245, 233);
        height: 50%
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
</style>
<div class="layout_danhmuc">
    <div class="danhmuc"><h2 style="margin: 1% 0 0 2%"> Thêm  loại phòng </h2>
        <form method="post" enctype="multipart/form-data" action="../control/ctr_them_loaiphong.php">
            <div>
                <label>Mã loại phòng</label><br>
                <input type="text" name="ma_lp">
            </div>
            <div>
                <label>Loại phòng</label><br>
                <input type="text" name="loaiphong">
            </div>
            <div>
                <label>Hình Ảnh</label><br> 
                <input style="border:none" type="file" name="hinhanh">
            </div>
            <button type="submit">Lưu</button>
        </form>
    </div>
</div>