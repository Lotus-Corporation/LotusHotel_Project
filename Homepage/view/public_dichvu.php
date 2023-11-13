<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from DICHVU";
    $result=$link->query($sql);
?>
<style>
    body{
        background:linear-gradient(rgb(231, 245, 249),rgb(193, 233, 244));
        margin: 0;
    }
    .layout_anh{
        height: 850px; 
        background-color:rgb(40, 129, 143); 
        position:relative; 
        background-attachment: fixed;
        background-image: url('https://demo2.themelexus.com/erios/wp-content/uploads/2022/09/rev_home06.jpg');
        background-position: center center;
        margin-bottom: 7%;
    }   
    .loigoi{
        text-align: center; 
        position:absolute; 
        top:43%;
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
        height: 380px;
        margin: 1.5% 1%;
        text-decoration: none;
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
        margin-left: 5%;
        color: black;
        position: absolute;
        top:250px;
        background-color: #fff;
        width: 83%;
        padding-left: 7%;
        border-radius: 5px;
        font-size: 18px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .mota:hover{
        background-color: gray;
        color: #fff;
        transition: 0.5s
    }
    h3{
        margin-bottom: -10px;
    }
    button{
        top:10%;
        right:0;
        font-size:15px;
        padding:17px;
        position:absolute;
        border-radius: 0 0 0 15px;
        border:none;
        background-color: black;
        cursor: pointer;
    }
    button:hover{
        transition: 0.8s;
        transform: scale(1.03);
    }
</style>

<div class="layout_anh">
    <div class="layout_anh_opacity"></div>
    <div class="loigoi">
        <div style=" font-size:60px; margin-left:15%">SERVICES</div>
    </div>
</div>
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<form method="POST" action="view/public_giohang.php?action=add">
    <div class="layout">
        <div class="layout_con">
            <img src="img/dichvu/<?php echo $row["HINHANHDV"]; ?>" style="width: 100%; height: 280px; border-radius:5px">
            <button><i class="fa fa-shopping-cart"> Booking</i></button>
            <div class="mota">
                <h3><?php echo $row["TENDV"] ?></h3>
                <p><?php echo $row["DONGIADV"]?> VND/<?php echo $row["DONVITINH"]?></p>
                <input type=hidden value="1" name="soluong_dv[<?php echo $row["MA_DV"]?>]">
                
            </div>
        </div>
    </div>
</form>
<?php
    }
?>