<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from dichvu";
    
    $result=$link->query($sql);
?>
    <link rel="stylesheet" href="../css/menu-logo.css">
    <link rel="stylesheet" href="../css/public.css"> 
<style>
    body{
        background-color:aliceblue;
        margin: 0;
    }
</style>
<div style="width: 100%; position: fixed; z-index: 1; background-color:white">
    <div class="logo1">Our rooms
        <div class="menu" >
            <a href="">Standard</a>
            <a href="">Superior</a>
            <a href="">Deluxe</a>
            <a href="">Suite</a>
        </div>
    </div>
    <div class="logo1">Services</div>
    <div class="logo1">Restaurant</div>
    <div class="logo"><?php include './logo.php';?>
    </div>
    <div class="logo1">Spa&Wellness</div>
    <div class="logo1">Special Offers</a></div>
    <div class="logo1">Contacts</div>
</div>
<div style="height: 600px; background-color:rgb(102, 163, 182); position:relative; top:50px; margin-bottom: 5%;">
    <img src=""style="height: 600px; width:100%">
    <div class="loigoi_km">
        <div style=" font-size:60px; margin-left:15%">SERVICES</div>
    </div>
</div>
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<div class="layout_khuyenmai">
    <a href="">
        <div class="khuyenmai">
            <img src="../img/dichvu/<?php echo $row["HINHANHDV"]; ?>" style="width: 100%; height: 310px;">
            <div class="mota_km">
                <h2><?php echo $row["TENDV"] ?></h2>
                <p><?php echo $row["DONGIADV"]?> VND/<?php echo $row["DONVITINH"]?></p>
                <h3>CHI TIẾT-></h3>
            </div>
        </div>
    </a>
</div>
<?php
    }
?>