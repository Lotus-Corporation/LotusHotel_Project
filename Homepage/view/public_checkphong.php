

?>
<style>
    body{
        background-color:aliceblue;
        margin: 0;
    }
    .layout_anh{
        height: 800px; 
        position:relative; 
        margin-bottom: 5%;
        background-attachment: fixed;
        background-image: url('https://template65036.motopreview.com/mt-demo/65000/65036/mt-content/uploads/2017/12/mt-1286-home-header-bg.jpg');
        background-position: center;
    }   
    .loigoi{
        text-align: center; 
        position:absolute; 
        top:42%;
        left:44%;
        color: #fff;
    }
    .layout:nth-child(n){
        margin-left: 8%;
    }
    .layout_con{
        float: left; 
        width:42%;
        height:350px;
        margin: 2%;
        text-decoration: none;
        position: relative;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        transition: transform 2s;
        overflow: hidden;
        border-radius: 10px;
    }
    .layout_con:hover{
        transform: scale(1);
    }
    .price{
   top:10%;
   right:0;
   font-size:15px;
   background-color:#885819;
   padding:15px;
   position:absolute;
   color:#ffffff;
   border-radius: 0 0 0 15px;
}
    .cart{
    top:30%;
    right:0;
    font-size:15px;
    background-color:#885819;
    padding:15px;
    position:absolute;
    color:#fff;
    border-radius: 0 0 0 15px;
 }
    .tenphong{
        font-size: 15px;
        position: absolute;
        left: 0;
        bottom: 0;
        padding:3.5%;
        color: #fff;
    }
    .tenphong > i{
        padding: 5px;
    }
    .layout_con > img{
        width: 100%; 
        height: 350px; 
        transition: transform 0.7s
    }
    .layout_con >img:hover{
        transform: scale(1.07);
        opacity: 0.93;
    }
</style>


<div class="layout_anh">
    <div class="loigoi">
        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px; margin-bottom:5%">THE COLLECTION</div>
        <div style="font-size:55px">ROOM</div>
    </div>
</div>


<?php 
    $link=new mysqli("localhost","root","","khachsan");
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['ngay_di']) && isset($_POST['ngay_ve'])) {
            $check_in = $_POST['ngay_di'];
            $check_out = $_POST['ngay_ve'];
            $chon=$_POST["chon"];
            $link=new mysqli("localhost","root","","khachsan");
        $sql =  "SELECT * FROM PHONG P WHERE MA_CN = '$chon' AND NOT EXISTS
        (SELECT 1 FROM CHITIETNHATKIDATPHONG C, NHATKIDATPHONG N WHERE
        C.MA_PHONG = P.MA_PHONG AND C.MA_NKDP = N.MA_NKDP AND ((N.NGAYDAT BETWEEN '$check_in' AND '$check_out') 
        OR (N.NGAYTRAPHONG BETWEEN '$check_in' AND '$check_out')))";
        $result=$link->query($sql);
        if ($result === false) {
            printf("Error: %s\n", $link->error);
        } else {
            if(isset($result) && $result->num_rows>0)
            {
                while($row=$result->fetch_assoc())
                {
    
?>
<div class="layout">
    <a href="">
        <div class="layout_con">
            <img src="img/phong/<?php echo $row["ANHPHONG"]; ?>">
            <div class="price">Price:<b> <?php echo $row["DONGIAPHONG"] ?>đ</b></div>
            <div class="cart"><i class="fa fa-shopping-cart"> Booking</i></div>
            <div  class="tenphong">
                <div><h2><?php echo $row["TENPHONG"] ?></h2></div>
                <i class="fa fa-bed" aria-hidden="true"> 1 bed</i>
                <i class="fa fa-users" aria-hidden="true"> Max <?php echo $row["SONGUOITOIDA"]?></i>
            </div>
            
        </div>
    </a>
</div>
<?php
       }
    }
    else {
        echo "<div style='text-align:center; font-size: 20px;'>HẾT PHÒNG MẤT RỒI 😢</div>";
    }
    
}
}
}
?>
