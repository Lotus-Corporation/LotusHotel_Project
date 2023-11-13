<link rel="stylesheet" href="css/thongtin.css"> 
<div class="loi_goi">
  <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:17px;margin-top:2%">HÃY BẮT ĐẦU TRẢI NGHIỆM</div>
  <div style="font-size:40px">LOTUS</div>
  </div>
<div class="layout_thong_tin">
      <div class="dat_phong">
      <form method="post" action="index_menu.php?pid=10" >
        <div class="dat_phong1" style="left: 2%;"> 
            <?php 
                $link=new mysqli("localhost","root","","khachsan");
                $sql="select * from CHINHANH";   
                $result1=$link->query($sql);
            ?>
            <select name="chon" style="cursor: pointer;;height: 50px;text-align: center; width: 100%;font-family: 'Courier New';font-size: 18px; border:none;border-radius: 5px;"> 
                <?php
                    while($row=$result1->fetch_assoc())
                    {
                ?>
                        <option value =<?php echo $row["MA_CN"] ?>> <?php echo $row["TINHTHANH"]?> </option>
                <?php
                    }
                ?>
            </select>
        </div>
        <div class="dat_phong1" style="left: 27%">       
            <input type="date" name="ngay_di" style="cursor: pointer;;height: 50px;width:100%;font-family: 'Courier New';font-size: 18px; border:none;border-radius: 5px;" required> 
        </div>

        <div class="dat_phong1" style="left: 52%"> 
           <input type="date" name="ngay_ve" style="cursor: pointer;;height: 50px;width:100%;font-family: 'Courier New';font-size: 18px; border:none;border-radius: 5px;" required> 
        </div>

        <div class="dat_phong2" style="left: 77.3%">
           <input type="submit" value="✔ Check room"  style=" border-radius: 5px;color: rgb(255, 255, 255);  line-height: 3;width:100%;height:100%;background-color: rgb(27, 54, 73);" >
        </div>


    </form>

</div>


<script>
window.onload = function() {
    var elements = document.getElementsByTagName('INPUT');
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Xin vui lòng chọn ngày!");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    } 
}
</script>

        <div class="thong_tin" style="margin: 5% 2% 0 8%; text-align:justify;word-spacing:2.5px">
          <h1>LOTUS</h1>
          Khách sạn của chúng tôi - LOTUS HOTEL, nơi mang đến cho bạn trải nghiệm lưu trú đẳng cấp và thoải mái. Khách sạn của chúng tôi tọa lạc tại vị trí thuận lợi, giúp bạn dễ dàng tiếp cận các điểm du lịch nổi tiếng và trung tâm mua sắm.
        </div>
      
        <div class="thong_tin" style="margin: 5% 2% 0 0">
          <h1>Contact Info</h1>
          <h3 style="margin-bottom:2%"><i class="fa fa-phone" aria-hidden="true" style="color: black;"></i> Phone</h3>0316546156
          <h3 style="margin-bottom:2%"><i class="fa fa-map-marker" aria-hidden="true" style="color: black;"></i> Address</h3>47B Đường Nguyễn Trãi 11, Quận 1, TP. Hồ Chí Minh
          <h3 style="margin-bottom:2%"><i class="fa fa-envelope-o" aria-hidden="true"style="color: black;"></i> Email</h3>lotushotel@gmail.com
        </div>
        <div class="thong_tin" style="margin: 5% 2% 0 0">
          <h1>Quick Links</h1>
          <ul style="list-style-type: none; margin-left:-10%; font-size: 18px;">
            <li style="padding-bottom:5%;border-bottom: none;"><a style="text-decoration:none; color:black" href="#">Our Room</a></li>
            <li style="padding-bottom:5%;border-bottom: none;"><a style="text-decoration:none; color:black"href="#">Restaurant & Bar</a></li>
            <li style="padding-bottom:5%;border-bottom: none;"><a style="text-decoration:none; color:black"href="#">Spa & Wellness</a></li>
            <li style="padding-bottom:5%;border-bottom: none;"><a style="text-decoration:none; color:black"href="#">Service</a></li>
            <li style="padding-bottom:5%;border-bottom: none;"><a style="text-decoration:none; color:black"href="#">Special Offers</a></li>
            <li style="padding-bottom:5%;border-bottom: none;"><a style="text-decoration:none; color:black"href="#">Contact</a></li>
          <ul>
        </div>
        <div class="thong_tin" style="margin: 5% 0 0 0">
          <h1>Get The Apps</h1><br>
          <img src="https://laseta.bithemer.com/assets/img/icons/i1.svg">
          <img src="https://laseta.bithemer.com/assets/img/icons/i2.svg">
          <br><br><h1>Connect Social</h1>
          <img src="https://img.icons8.com/?size=256&id=uLWV5A9vXIPu&format=png" style="width: 30px; height:30px">
          <img src="https://img.icons8.com/?size=256&id=Xy10Jcu1L2Su&format=png" style="width: 30px; height:30px">
          <img src="https://img.icons8.com/?size=256&id=13963&format=png" style="width: 30px; height:30px">
          <img src="https://img.icons8.com/?size=256&id=oWiuH0jFiU0R&format=png"style="width: 30px; height:30px">
          <img src="https://img.icons8.com/?size=256&id=19318&format=png"style="width: 30px; height:30px">
        </div>
      </div>