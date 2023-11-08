<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./css/phongnoibat.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="./js/js.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/slick.css"/>
    <script src="./js/js2.js"></script>
</head>
<body>
    <?php 
        $link = new mysqli("localhost", "root", "", "khachsan");
        $sql = "
            (SELECT * FROM PHONG WHERE MA_LOAIPHONG='STD' LIMIT 1)
            UNION ALL
            (SELECT * FROM PHONG WHERE MA_LOAIPHONG='DLX' LIMIT 1)
            UNION ALL
            (SELECT * FROM PHONG WHERE MA_LOAIPHONG='SUP' LIMIT 2)
            UNION ALL
            (SELECT * FROM PHONG WHERE MA_LOAIPHONG='SUT' LIMIT 2)
        ";
        $result = $link->query($sql);
    ?>

    <div class="mau_layout" style="height: auto; padding: 2em;">
        <div class="loigoi">
            <h3 style="font-weight: normal;">Một số phòng nổi bật của chúng tôi</h3>
        </div>

        <div class="carousel">
            <?php
                while ($row = $result->fetch_assoc()) {
            ?>
            <div class="layout">
                <a>
                    <div class="layout_con">
                        <img src="img/phong/<?php echo $row["ANHPHONG"]; ?>">
                        <div class="price">Price:<b> <?php echo $row["DONGIAPHONG"] ?>đ</b></div>
                        <form method="POST" action="view/public_giohang.php?action=add">
                            <input type=number value="1" name="soluongphong[<?php echo $row["MA_PHONG"]?>]">
                            <button type=submit class="cart"><i class="fa fa-shopping-cart"> Booking</i></button>
                        </form>
                        <div class="tenphong">
                            <div><h2><?php echo $row["TENPHONG"] ?></h2></div>
                            <i class="fa fa-bed" aria-hidden="true"><?php echo $row["SOGIUONG"]?> bed</i>
                            <i class="fa fa-users" aria-hidden="true">Max <?php echo $row["SONGUOITOIDA"]?></i>
                        </div>
                    </div>
                </a>
            </div>
            <?php
                }
            ?>
        </div>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="header">
                <h2 id="modalTitle"></h2>
                <span class="close">×</span>
            </div>
            <hr>
            <div class="body">
                <div class="hinhphong">
                    <img id="img01">
                </div>
                <div class="motaphong">
                    <div class="description">
                        Được thiết kế sang trọng và hoàn hảo với các tiện nghi hiện đại, đáp ứng tất cả kỳ nghỉ thư thái của bạn trong căn phòng yên tĩnh với cửa sổ lớn nhìn ra quang cảnh thành phố.
                    </div>
                    <P style="font-weight: bold;">Tiện nghi của phòng</P>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('.carousel').slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                prevArrow: '<button type="button" class="slick-prev" style="background: transparent; border: none;"> <img src="./img/anhphongnoibat/mt.png" alt="some_text" style="opacity:0.4;filter:alpha(opacity=40); padding: 0 0 0 29px;;"/></button>',
                nextArrow: '<button type="button" class="slick-next" style="background: transparent; border: none; padding: 4px"> <img src="./img/anhphongnoibat/mt2.png" alt="some_text" style="opacity:0.4;filter:alpha(opacity=40)"/></button>'
            });

            var modal = document.getElementById("myModal");
            var layoutCons = document.getElementsByClassName("layout_con");
            var modalImg = document.getElementById("img01");
            var modalTitle = document.getElementById("modalTitle");

            for(let i = 0; i < layoutCons.length; i++) {
                layoutCons[i].onclick = function() {
                    modal.style.display = "block";
                    modalImg.src = this.getElementsByTagName('img')[0].src;
                    modalTitle.innerHTML = this.getElementsByClassName('tenphong')[0].getElementsByTagName('h2')[0].innerHTML;
                }
            }

            var span = document.getElementsByClassName("close")[0];

            span.onclick = function() { 
                modal.style.display = "none";
            }

            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }

            window.addEventListener("keydown", function(event) {
                if (event.key === "Escape") {
                    modal.style.display = "none";
                }
            });
        });
    </script>
</body>
</html>
