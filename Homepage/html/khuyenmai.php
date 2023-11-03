<?php 
    $link=new mysqli("localhost","root","","khachsan");

    $sql = "
    (SELECT * FROM KHUYENMAI WHERE MA_KM='km07')
    UNION ALL
    (SELECT * FROM KHUYENMAI WHERE MA_KM='km08')
    UNION ALL
    (SELECT * FROM KHUYENMAI WHERE MA_KM='km09' ) ";
    $result=$link->query($sql);
    
?>
<style> 
    body{
        background:linear-gradient(rgb(231, 245, 249),rgb(193, 233, 244));
        margin: 0
    }
    .layout2_anh{
        width: 100%;
        height: 600px; 
        position:relative; 
        top:55px; 
        margin-bottom: 7%;
    }   
    .layout2_anh_opacity{
        width: 100%;
        height: 600px; 
        position:absolute; 
        top:0;
        background-color: black; 
        opacity:0.5;
    }
    .layout2_con{
        height:300px;
        margin: 2%;
        text-decoration: none;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        transition: 0.25s
    }
    .layout2_con:hover{
        transform: scale(1);
        opacity: 0.9
    }
    .layout2_con > img{
        transition: 0.7s;
    }
    .layout2_con > img:hover{
        transform: scale(1.07);
        opacity: 0.93
    }
    .mota2{
        height: 60px;
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
    .mota2:hover{
        background-color: rgb(28, 113, 136);
        color: #fff;
    }
    .hathai{
        margin-top: -10px;
    }
    .chupe{
        margin-top: -13px;
        font-size:17px;
    }
     .layout3 {
    display: flex;
    width: 1380px;
    height: auto;
    margin: auto;
    flex-wrap: nowrap;
    justify-content: space-evenly;
    align-items: center;
}
</style>

<div class="layout3">
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<div class="layout2">
    <a href="">
        <div class="layout2_con">
            <img src="img/khuyenmai/<?php echo $row["HINHANHKM"]; ?>" style="width: 100%; height: 230px;">
            <div class="mota2">
                <h2 class="hathai"><?php echo $row["TENKM"] ?></h2>
                <p class="chupe"><?php echo $row["MOTA"]?></p>
            </div>
        </div>
    </a>
</div>
<?php
    }
?>
</div>