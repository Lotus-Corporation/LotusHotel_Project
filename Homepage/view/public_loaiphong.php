<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $mlp=$_GET["malp"];
    $sql="select * from PHONG where MA_LOAIPHONG='$mlp'";
    $result=$link->query($sql);
?>
    <link rel="stylesheet" href="css/menu-logo.css">
    <link rel="stylesheet" href="css/public.css"> 
<style>
    body{
        background-color:aliceblue;
        margin: 0;
    }
</style>

<div class="layout_anh">
    <img src=""style="height: 600px; width:100%">
    <div class="loigoi" style="top:42%;left: 44%;">
        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px; margin-bottom:5%">THE COLLECTION</div>
        <div style="font-size:55px">ROOM</div>
    </div>
</div>
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<div class="layout">
    <a href="">
        <div class="layout_con" style="height: 470px">
            <img src="img/<?php echo $row["ANHPHONG"]; ?>" style="width: 100%; height: 280px;">
            <div class="mota">
                <h2><?php echo $row["MA_LOAIPHONG"] ?></h2>
                <p>Giá từ <?php echo $row["DONGIAPHONG"] ?>đ</p>
                <p>Tối đa <?php echo $row["SONGUOITOIDA"]?> người</p>
                <h3>CHI TIẾT-></h3>
            </div>
        </div>
    </a>
</div>
<?php
    }
?>