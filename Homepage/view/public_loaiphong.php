
<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $mlp=$_GET["malp"];
    $sql="select * from PHONG where MA_LOAIPHONG='$mlp'";
    $result=$link->query($sql);
?>

<style>
    /* Your existing CSS */
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
        right: 0;
        font-size: 15px;
        background-color: rgb(136, 88, 25);
        padding: 15px;
        position: absolute;
        color: #fff;
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
        border:none
    }
    .cart:hover{cursor: pointer;}
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
        transition: 0.7s
    }
    .layout_con >img:hover{
        transform: scale(1.07);
        opacity: 0.93;
    }


    .modal {
    display: none;
    position: fixed;
    z-index: 6;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);

  }
  
  .modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    margin: 10%;
    top: -9%;
  }
  .modal-content .body .motaphong .amenities .amenity {
    width: 48%;
    display: flex;
    align-items: center;
    margin: 3% 1% 2% 0;
    

}
    
  .modal-content .header {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #000;
  }
  
  .modal-content .header h2 {
    margin: 16px;
    padding-left: 41%;
  }
  
  .modal-content .header .close {
    color: #000;
    font-size: 26px;
    font-weight: bold;
    transition: 0.3s;
    cursor: pointer;
    text-decoration: none;
    border-radius: 50%;
    padding: 2px;
    width: 30px;
    height: 30px;
    text-align: center;
    position: absolute;
    top: 0;
    right: 0;
  }
  
  .modal-content .body {
    display: flex;
    width: 100%;
    height: 90%;
  }
  
  .modal-content .body .hinhphong {
    width: 66%;
  }
  
  .modal-content .body .hinhphong img {
    width: 100%;
    max-height: 100%;
  }
  
  .modal-content .body .motaphong {
    width: 30%;
    color: #000;
    display: flex;
    flex-direction: column;
    /* justify-content: space-between; */
    margin: 1% 2% 2% 2%;

  }
  
  .modal-content .body .motaphong .description {
    height: 28%;
  }
  
  .modal-content .body .motaphong .amenities {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
   
  }
  
  .modal-content .body .motaphong .amenities .amenity {
    width: 48%;
    display: flex;
    align-items: center;
    margin: 3% 1% 2% 0;
}
  
  .modal-content .body .motaphong .amenities .amenity img {
    width: 20px;
    height: 20px;
    margin-right: 5px;
  }
  
  .modal-content hr {
    border: 0;
    border-top: 1px solid #ccc;
    margin: 10px 0;
    width: 95%;
  }
  
</style>

<div class="layout_anh">
    <div class="loigoi">
        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px; margin-bottom:5%">THE COLLECTION</div>
        <div style="font-size:55px">ROOM</div>
    </div>
</div>
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<div class="layout">
    <a href="#popup<?php echo $row["MA_PHONG"]; ?>">
    <div class="layout_con">
    <img src="img/phong/<?php echo $row["ANHPHONG"]; ?>" onclick="openPopup('popup<?php echo $row["MA_PHONG"]; ?>', '<?php echo $row["TENPHONG"]; ?>', 'img/phong/<?php echo $row["ANHPHONG"]; ?>')">
            <div class="price">Price:<b> <?php echo $row["DONGIAPHONG"] ?>đ</b></div>
            <form method="POST" action="view/public_giohang.php?action=add">
                <input type=number value="1" name="soluongphong[<?php echo $row["MA_PHONG"]?>]">
                <button type=submit class="cart"><i class="fa fa-shopping-cart"> Booking</i></button>
            </form>
            <div  class="tenphong">
                <div><h2><?php echo $row["TENPHONG"] ?></h2></div>
                <i class="fa fa-bed" aria-hidden="true"> <?php echo $row["SOGIUONG"]?> bed</i>
                <i class="fa fa-users" aria-hidden="true"> Max <?php echo $row["SONGUOITOIDA"]?></i>
            </div>
            
        </div>
    </a>
</div>


<div id="popup<?php echo $row["MA_PHONG"]; ?>" class="modal">
    <div class="modal-content">
        <div class="header">
            <h2 id="modalTitle<?php echo $row["MA_PHONG"]; ?>"></h2>
            <span class="close">×</span>
        </div>
        <hr>
        <div class="body">
            <div class="hinhphong">
                <img id="img01<?php echo $row["MA_PHONG"]; ?>">
            </div>
            <div class="motaphong">
                <div class="description">
                    Được thiết kế sang trọng và hoàn hảo với các tiện nghi hiện đại, đáp ứng tất cả kỳ nghỉ thư thái của bạn trong căn phòng yên tĩnh với cửa sổ lớn nhìn ra quang cảnh thành phố.
                </div>
                <P>Tiện nghi của phòng</P>
                <div class="amenities">
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/external-wardrobe-furniture-household-prettycons-solid-prettycons_1678159280.png"> Tủ quần áo</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/bed--v1_1678159161.png"> Ga trải giường, gối</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/no-smoking_1678159728.png"> Phòng không hút thuốc</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/shower-on--v1_1678159438.png"> Vòi sen</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/external-bar-counter-bar-and-restaurant-icongeek26-glyph-icongeek26_1678159932.png"> Quầy bar mini</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/shower_1678160210.png"> Phòng tắm - Vòi sen</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/external-laundry-cleaning-kiranshastry-solid-kiranshastry-1_1678159358.png"> Dịch vụ giặt ủi</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/hair-dryer_1678159642.png"> Máy sấy tóc</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/bank-safe_1678160287.png"> Két sắt an toàn</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/external-wifi-connection-overclocking-smashingstocks-glyph-smashing-stocks_1678160128.png"> Wifi</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/soap_1678158691.png"> Đồ phòng tắm</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/towel_1678158562.png"> Khăn tắm</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/external-telephone-communications-prettycons-solid-prettycons_1678158776.png"> Điện thoại</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/desk-lamp_1678158899.png"> Đèn bàn</div>
                        <div class="amenity"><img src="https://booking.muongthanh.com/images/rooms/service/2023/03/original/external-desk-back-to-school-vitaliy-gorbachev-fill-vitaly-gorbachev_1678158472.png"> Bàn làm việc</div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script>

var popups = document.getElementsByClassName("modal");


var spans = document.getElementsByClassName("close");


function openPopup(popupId, title, imgSrc) {
    var popup = document.getElementById(popupId);
    var modalTitle = document.getElementById("modalTitle" + popupId.replace("popup", ""));
    var modalImg = document.getElementById("img01" + popupId.replace("popup", ""));
    modalTitle.innerHTML = title;
    modalImg.src = imgSrc;
    popup.style.display = "block";
}

for (let i = 0; i < spans.length; i++) {
    spans[i].onclick = function() {
        popups[i].style.display = "none";
    }
}


window.onclick = function(event) {
    for (let i = 0; i < popups.length; i++) {
        if (event.target == popups[i]) {
            popups[i].style.display = "none";
        }
    }
}


document.onkeydown = function(evt) {
    evt = evt || window.event;
    var isEscape = false;
    if ("key" in evt) {
        isEscape = (evt.key === "Escape" || evt.key === "Esc");
    } else {
        isEscape = (evt.keyCode === 27);
    }
    if (isEscape) {
        for (let i = 0; i < popups.length; i++) {
            popups[i].style.display = "none";
        }
    }
};
</script>

<?php
    }
?>
