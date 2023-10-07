<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from khuyenmai";
    
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
    <div class="loigoi">
        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px; margin-bottom:5%">ENJOY THE VALUES</div>
        <div style="font-size:45px">SPECIAL OFFERS</div>
    </div>
</div>
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<div class="layout">
    <a href="">
        <div class="layout_con">
            <img src="img/<?php echo $row["HINHANHKM"]; ?>" style="width: 100%; height: 280px;">
            <div class="mota">
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