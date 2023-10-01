<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="./css/checkphong.css"> 
    <link rel="stylesheet" href="./css/menu-logo.css"> 
    <link rel="stylesheet" href="./css/loaiphong.css">  
    <link rel="stylesheet" href="./css/phongnoibat_dv.css">
    <link rel="stylesheet" href="./css/diadiemnb.css">   
    <link rel="stylesheet" href="./css/danhgia.css"> 
    <link rel="stylesheet" href="./css/mota-uudai.css"> 
    <link rel="stylesheet" href="css/dichvu.css">
    <link rel="stylesheet" href="css/phongnoibat.css" />
    <script type='text/javascript' src='script.js'></script>
    <?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from loaiphong";
$result=$link->query($sql);
?>
        
        </head>
  <body>
    <div class="container">
      <div style="width: 100%; position: fixed; z-index: 1; background-color:white">
        <div class="logo1";>Our rooms
        <div class="menu" >
          
        <?php
while ($row=$result->fetch_assoc())
{
 ?>   
    <a> <?php echo $row["LOAIPHONG"];?></a>
<?php
 }
?>
           </div>
        </div>
        <div class="logo1">Services</div>
        <div class="logo1">Restaurant</div>
        <div class="logo">
          <img src="img/LOGO.png" alt="" width=100% height=130px>        </div>
        <div class="logo1">Spa&Wellness</div>
        <div class="logo1" ><a style="text-decoration: none; color: black" href="view/public_khuyenmai.php" >Special Offers</a></div>
        <div class="logo1">Contacts</div>
      
      </div>
      <div align="center" style="width: 100%; height: 600px; background-color: white; position:relative; top:50px">
      <?php include 'view/anhchinh.php';?>
      </div>

      <div style="width: 100%; height: 620px; margin-top: 5%;">
        <div class="mota2"> 
          <div class="mota3"> 
              <div align="center" class="mota4">
                  <div align="center" class="mota5" style=" background-color: Aqua "> Ảnh </div>
                  <div align="center" class="mota6" style=" background-color: CornflowerBlue "> Mô Tả </div>
              </div>
          </div>
          <div class="mota7">
              <div align="center" class="mota4">
                  <div align="center" class="mota5" style=" background: CornflowerBlue "> Ảnh </div>
                  <div align="center" class="mota6" style=" background: Aqua "> Mô Tả </div>
              </div>
          </div>
      </div>
      </div>
      <div align="center" class="overlay">
        <div class="check">
          <div class="check1">ĐIỂM ĐẾN</div>
          <div class="check2">Hà nội</div>
        </div>
        <div class="check" "="">
          <div class="check1">Ngày nhận phòng</div>
          <div class="check2"> 11/2/2030</div>
        </div>
        <div class="check" "="">
          <div class="check1">Ngày trả phòng</div>
          <div class="check2">11/2/2040</div>
        </div>
        <div class="check">
          <div class="check1"> số phòng và khách</div>
          <div class="check2">1phòng, 2khach</div>
        </div>
        <button class="timkiem" onclick="alert(kakak39)">CHECK ROOM</button>
      </div>
      <div class="uudai1">
        <div align="center" class="uudai2"> Ưu Đãi </div>
        <div class="uudai3">
            <div align="center" class="uudai3">
                <div align="center" class="uudai2"> Ưu Đãi 1 </div>
                <div class="uudai5" style=" background-color: DeepskyBlue "> </div>
            </div>
            <div align="center" class="uudai4">
                <div align="center" class="uudai2"> Ưu Đãi 2 </div>
                <div class="uudai5" style=" background-color: LightskyBlue "> </div>
            </div>
        </div>
        <div class="uudai4">
            <div align="center" class="uudai3">
                <div align="center" class="uudai2"> Ưu Đãi 3 </div>
                <div class="uudai5" style=" background-color: PaleTurquoise "> </div>
            </div>
            <div align="center" class="uudai4">
                <div align="center" class="uudai2"> Ưu Đãi 4 </div>
                <div class="uudai5" style=" background-color: DarkTurquoise  "> </div>
            </div>
        </div>
    </div>

      <div id="phongnoibat">
      <div class="div_phongnoibat"  >
        <ul class= "ul">
              <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="0" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/11.webp" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="1" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/2.jpg" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="2" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/3.jpg" >
        </a>
      </li>
          <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="3" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/4.jpg" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="4" >
          <img class="hinhanh" alt=" hinhanh " src="img/anhphongnoibat/5.jpg" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="5" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/6.webp" >
        </a>
      </li>
          <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="6" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/7.webp" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="7" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/12.webp" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="8" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/10.webp" >
        </a>
      </li>
          <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="9" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/3.jpg" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="10" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/1.jpg" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="11" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/8.webp" >
        </a>
      </li>
          <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="12" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/13.jpg" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="13" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/14.jpg" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="14" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/15.jpg" >
        </a>
      </li>
          <li class="image fancy nh-khch-sn portrait dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="15" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/16.jpg" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="16" >
          <img class="hinhanh" alt=" hinhanh" src="img/anhphongnoibat/17.jpg" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="17" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/1.jpg" >
        </a>
      </li>
          <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="18" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/2.jpg" >
        </a>
      </li>
          <li class="image fancy nh-khch-sn portrait">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="19" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/10.webp" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="20" >
          <img class="hinhanh" alt=" hinhanh" src="img/anhphongnoibat/4.jpg" >
        </a>
      </li>
          <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="21" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/5.jpg" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="22" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/6.jpg" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="23" >
          <img class="hinhanh" alt=" hinhanh" src="img/anhphongnoibat/7.webp" >
        </a>
      </li>
          <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="24" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/12.webp" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="25" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/9.webp" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="26" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/10.webp" >
        </a>
      </li>
          <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="27" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/11.webp" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="28" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/8.webp" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="29" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/13.jpg" >
        </a>
      </li>
          <li class=" dau">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="30" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/14.jpg" >
        </a>
      </li>
          <li >
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="31" >
          <img class="hinhanh" alt="hinhanh " src="img/anhphongnoibat/15.jpg" >
        </a>
      </li>
          <li class="cuoi">
        <a class="thanh_hinhanh" href="javascript:void(0);" data-id="32" >
          <img class="hinhanh" alt="hinhanh" src="img/anhphongnoibat/16.jpg" >
        </a>
      </li>
        </ul>
        <span class="hieuung left" style="display: block;"><span style="display: inline;"></span></span>
        <span class="hieuung right" style="display: block;"><span style="display: inline;"></span></span>
      </div>
      <a class="mo_toanbo" href="javascript:;"> Xem Tất Cả Các Phòng </a>
    </div>

      <div id="phandichvu">
      <div class="dichvu">
        <h2>Welcome to an oasis of luxury and tranquility</h2>
        <br>
        <div>
          <p>
            Tất cả mang lại một trải nghiệm khách sạn sang trọng và độc đáo. Từ
            các chi tiết thiết kế cho đến các triển lãm và sự kiện, hãy khám phá
            những gì độc đáo nhất của khách sạn chúng tôi.
          </p>
        </div>
        <ul>
          <li>
            <a
              href="https://khachsan/vi/phong-suites/">
              <div>
                <h3 class="tieude_phandichvu">
                  PHÒNG &amp; SUITES
                </h3>
                <p>
                  Các phòng nghỉ của (. . .) được thiết kế với
                  không gian rộng rãi, thoải mái, hòa lẫn phong cách nghệ...
                </p>
                <span class="docthem">Đọc thêm</span>
              </div>
              <div class="hinhanh">
                <img
                  alt="phong-suites"
                  data-src="img/1.jpg"
                  src="img/anhdichvu/1.jpg"
                  width="300"
                  height="188"
                  data-width="700"
                  data-height="700"
                />
              </div>
            </a>
          </li>
          <li>
            <a
              href="https://khachsan/vi/nha-hang-quay-bar/">
              <div>
                <h3 class="tieude_phandichvu">
                  NHÀ HÀNG &amp; QUẦY BAR
                </h3>
                <p>
                  Các nhà hàng và quầy bar tại khách sạn (. . .)
                  tôn vinh sự giao thoa giữa bản sắc ẩm thực truyền thống...
                </p>
                <span class="docthem">Đọc thêm</span>
              </div>
              <div class="hinhanh">
                <img
                  alt="nha-hang-quay-bar"
                  data-src="img/2.jpg"
                  src="img/anhdichvu/2.jpg"
                  width="300"
                  height="150"
                  data-width="700"
                  data-height="700"
                />
              </div>
            </a>
          </li>
          <li>
            <a
              href="https://khachsan.com/vi/hoi-hop-su-kien/">
              <div>
                <h3 class="tieude_phandichvu">
                  HỘI HỌP &amp; SỰ KIỆN
                </h3>
                <p>
                  Khách sạn (. . .)  là một địa điểm sang trọng và
                  cao cấp để tổ chức những buổi InspiredMeetings™ ngay...
                </p>
                <span class="docthem">Đọc thêm</span>
              </div>
              <div class="hinhanh">
                <img
                  alt="hoi-hop-su-kien"
                  data-src="img/3.jpg"
                  src="img/anhdichvu/3.jpg"
                  width="300"
                  height="200"
                  data-width="700"
                  data-height="700"
                />
              </div>
            </a>
          </li>
          <li>
            <a
              href="https://khachsan.com/vi/tiec-cuoi/">
              <div>
                <h3 class="tieude_phandichvu">
                  TIỆC CƯỚI
                </h3>
                <p>Kỷ niệm ngày trọng đại...</p>
                <span class="docthem">Đọc thêm</span>
              </div>
              <div class="hinhanh">
                <img
                  alt="tiec-cuoi"
                  data-src="img/4.jpg"
                  src="img/anhdichvu/4.jpg"
                  width="300"
                  height="200"
                  data-width="700"
                  data-height="700"
                />
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>

      <div align="left" style="
          width: 100%;
          border: 1px solid black;
          height: 300px;
          background-color: rgb(21, 191, 21);
        ">
        <b>LOẠI PHÒNG</b>
        <div style="width: 23%; float: right; margin-top: 40px; margin-right: 30px">
          <div align="center" style="
              border: 1px solid black;
              height: 200px;
              background-color: white;
            ">
            Ảnh
          </div>
        </div>
        <div style="width: 23%; float: right; margin-top: 40px; margin-right: 10px">
          <div align="center" style="
              border: 1px solid black;
              height: 200px;
              background-color: white;
            ">
            Ảnh
          </div>
        </div>
        <div style="width: 23%; float: right; margin-top: 40px; margin-right: 10px">
          <div align="center" style="
              border: 1px solid black;
              height: 200px;
              background-color: white;
            ">
            Ảnh
          </div>
        </div>
        <div style="width: 23%; float: right; margin-top: 22px; margin-right: 10px">
          <div align="center" style="
              border: 1px solid black;
              height: 200px;
              background-color: white;
            ">
            Ảnh
          </div>
        </div>
        </div>

      
        <div class="diadiemnoibat">
          <h2 style="text-align: center" >ĐỊA ĐIỂM NỔI BẬT</h2>
            <div class="anhdiadiem">
              <img class="circle" src="../Imgs/ba.jpg" alt="Bữa ăn view biển" width="320" height="320">
              <img class="circle" src="../Imgs/nd.jpeg" alt="Trò chơi cảm giác mạnh " width="320" height="320">
              <img class="circle" src="../Imgs/ptv.jpg" alt="Phòng vip" width="320" height="320">
              <img class="circle" src="../Imgs/bad.jpg" alt="Nhà hàng" width="320" height="320">
            </div>
      </div>

      <div class="layout_danh_gia_noi_bat">
        <h1 style="text-align: center"><b>ĐÁNH GIÁ NỔI BẬT</b></h1>
        <div class="danh_gia">
          <img class="anh_dai_dien" src="https://i.pinimg.com/736x/63/a2/e2/63a2e222c202f9035cb38a7151ad8f19.jpg">
          <div class="comment">
            klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna;
            knjn lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
            jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEkjdc nc wjj
            ammwlkcnln cnken jkachuiwh lcneuh akehc H[ OISH;I uhiy yguy guyg it7
            <div style="margin:2%">⭐⭐⭐⭐⭐</div>
            <div><b>- Lalisa -</b></div>
          </div>
          
        </div>

        <div class="danh_gia">
        <img class="anh_dai_dien" src="https://i.pinimg.com/originals/cd/b2/3f/cdb23fa36c904fb5efdcff3962fb86a5.jpg">
          <div class="comment">
            klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna;
            knjn lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
            jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
            <div style="margin:2%">⭐⭐⭐⭐⭐</div>
            <div><b>- Jennie -</b></div>
          </div>
        </div>

      </div>
      <div class="loi_goi">
        <h3>HÃY BẮT ĐẦU TRẢI NGHIỆM </h3>
        <h2>LOTUS</h2>
      </div>
      <div class="dat_phong">
        <div class="dat_phong1" style="top: 10px;left: 2%;"></div>
        <div class="dat_phong1" style="top: 10px;left: 27%;"></div>
        <div class="dat_phong1" style="top: 10px;left: 52%;"></div>
        <div class="dat_phong2" style="top: 10px;left: 77%;"></div>
      </div>
      <div class="layout_thong_tin">
        <div class="thong_tin" style="margin: 5% 2% 0 8%">
          <h1>LOTUS</h1>
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
        <div class="thong_tin" style="margin: 5% 2% 0 0">
          <h1>Lien He</h1>
          0316546156 <br>
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
        <div class="thong_tin" style="margin: 5% 2% 0 0">
          <h1>Quick Links</h1>
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
        <div class="thong_tin" style="margin: 5% 0 0 0">
          <h1>Apps</h1>
          <img src="https://laseta.bithemer.com/assets/img/icons/i1.svg">
          <img src="https://laseta.bithemer.com/assets/img/icons/i2.svg">
        </div>
      </div>
    </div>

</body></html>
