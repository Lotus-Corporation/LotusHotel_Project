<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from DICHVU";
    $result=$link->query($sql);
?>
<style>
    body{
        background-color:aliceblue;
        margin: 0;
    }
    .layout_anh{
        height: 600px; 
        background-color:rgb(40, 129, 143); 
        position:relative; 
        top:55px; 
        margin-bottom: 5%;
    }   
    .loigoi{
        text-align: center; 
        position:absolute; 
        top:40%;
        left:38%;
        color: #fff;
    }
    .layout:nth-child(n){
        margin-left: 10%;
    }
    .layout:nth-child(n+1){
        margin-right: 6%;
    }
    .layout_con{
        float: left; 
        width:30%;
        height: 320px;
        margin: 3% 1%;
        text-decoration: none;
        position: relative;
    }
    .mota{
        margin-left: 5%;
        font-family:Verdana, Geneva, Tahoma, sans-serif; 
        color: black;
        position: absolute;
        top:250px;
        background-color: #fff;
        width: 85%;
        padding-left: 5%;
        border-radius: 5px;
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
        <div class="layout_con">
            <img src="img/dichvu/<?php echo $row["HINHANHDV"]; ?>" style="width: 100%; height: 280px; border-radius:5px">
            <div class="mota">
                <h3><?php echo $row["TENDV"] ?></h3>
                <p><?php echo $row["DONGIADV"]?> VND/<?php echo $row["DONVITINH"]?></p>
                
            </div>
        </div>
    </a>
</div>
<?php
    }
?>