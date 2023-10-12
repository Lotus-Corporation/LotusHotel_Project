<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from DICHVU";
    
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
        <div style=" font-size:60px; margin-left:15%">SERVICES</div>
    </div>
</div>
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<div class="layout">
    <a href="">
        <div class="layout_con" style="height:470px">
            <img src="img/dichvu/<?php echo $row["HINHANHDV"]; ?>" style="width: 100%; height: 310px;">
            <div class="mota">
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