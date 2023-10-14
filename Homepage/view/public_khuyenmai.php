<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from KHUYENMAI";
    $result=$link->query($sql);
?>
<style> 
    body{
        background:linear-gradient(rgb(231, 245, 249),rgb(193, 233, 244));
        margin: 0
    }
    .layout_anh{
        width: 100%;
        height: 600px; 
        position:relative; 
        top:55px; 
        margin-bottom: 7%;
    }   
    .layout_anh_opacity{
        width: 100%;
        height: 600px; 
        position:absolute; 
        top:0;
        background-color: black; 
        opacity:0.5;
    }
    .loigoi{
        text-align: center; 
        position:absolute; 
        top:40%;
        left:38%;
        color: #fff;
    }
    .layout:nth-child(n){
        margin-left: 12%;
    }
    .layout_con{
        float: left; 
        width:40%;
        height:330px;
        margin: 2%;
        text-decoration: none;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        transition: 0.25s
    }
    .layout_con:hover{
        transform: scale(1);
        opacity: 0.9
    }
    .layout_con > img{
        transition: 0.7s;
    }
    .layout_con > img:hover{
        transform: scale(1.07);
        opacity: 0.93
    }
    .mota{
        height: 110px;
        position: absolute;
        top:230px;
        width: 100%;
        padding: 20px;
        background-color: #fff;
        color: black;
        font-size: 15px;
        transition: 0.5s;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .mota:hover{
        background-color: rgb(28, 113, 136);
        color: #fff;
    }
    h2{
        margin-top: -10px;
    }
    p{
        margin-top: -13px;
    }
</style>

<div class="layout_anh">
    <img src=""style="height: 600px; width:100%">
    <div class="layout_anh_opacity"></div>
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
            <img src="img/<?php echo $row["HINHANHKM"]; ?>" style="width: 100%; height: 230px;">
            <div class="mota">
                <h2><?php echo $row["TENKM"] ?></h2>
                <p><?php echo $row["MOTA"]?></p>
            </div>
        </div>
    </a>
</div>
<?php
    }
?>