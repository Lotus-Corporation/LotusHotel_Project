<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from khuyenmai";
    
    $result=$link->query($sql);
?>
<style>
    body{
        background-color:aliceblue;
        margin: 0;
    }
    .menu{
        width: 222px;
        background-color: rgb(252, 252, 252);
        position: absolute;
        top: 50px;
        z-index: 1;
        display: none;
        text-align: center;
        font-family: 'Courier New';
        font-size: 18px;
        color: rgb(27, 93, 111);
    }
    .menu a{
        padding: 12px 16px;
        display: block;
        text-decoration: none;
    }
    .logo1:hover .menu{display: block;}
    .menu a:hover {background-color: rgb(206, 255, 255);}
    .logo1:hover {background-color: rgb(206, 236, 243);}

    .logo1 {
        float: left;
        width: 14%;
        height: 53px;
        cursor: pointer;
        line-height: 2;
        text-align: center;
        font-family: 'Serif';
        font-size: 25px;
        color: rgb(0, 0, 0);
        font-weight: bold;
    }
    .logo1 a{
        text-decoration: none;
        color: black;
    }
    .logo {
        float: left;
        width: 15%;
        height: 53px;
        background-color: rgb(237, 240, 241);
    }
    .loigoi_km{
        text-align: center; 
        position:absolute; 
        top:40%;
        left:38%;
        color: #fff;
    }
    .layout_khuyenmai:nth-child(2n + 1){
        margin-left: 6%;
    }
    .khuyenmai{
        float: left; 
        width:45%;
        height:450px;
        margin: 3% 1%;
        cursor: pointer;
        background-color: white;
        text-decoration: none;
    }
    .mota_km{
        margin-left: 5%;
        font-family:Verdana, Geneva, Tahoma, sans-serif; 
        color: black;
    }
    h3{ 
        color: brown;
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
        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px; margin-bottom:5%">ENJOY THE VALUES</div>
        <div style="font-size:45px">SPECIAL OFFERS</div>
    </div>
</div>
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<div class="layout_khuyenmai">
    <a href="">
        <div class="khuyenmai">
            <img src="../img/<?php echo $row["HINHANHKM"]; ?>" style="width: 100%; height: 280px;">
            <div class="mota_km">
                <h2><?php echo $row["TENKM"] ?></h2>
                <p><?php echo $row["MOTA"]?></p>
                <h3>CHI TIẾT-></h3>
            </div>
        </div>
    </a>
</div>
<?php
    }
?>