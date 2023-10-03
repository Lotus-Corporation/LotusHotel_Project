<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="./css/style.css"> 
    <link rel="stylesheet" href="./css/checkphong.css"> 
    <link rel="stylesheet" href="./css/menu-logo.css"> 
    <link rel="stylesheet" href="./css/loaiphong.css">  
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
      <div style="width: 100%; position: fixed; z-index: 1; background-color:white;border: 8px solid rgb(193, 233, 244);">
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
        <div class="logo1"><a style="text-decoration: none; color: black" href="view/public_dichvu.php" >Services</a></div>
        <div class="logo1">Restaurant</div>
        <div class="logo">
          <img src="img/LOGO.png" alt="" width=100% height=130px style="border: 8px solid rgb(193, 233, 244);"></div>
        <div class="logo1">Spa&Wellness</div>
        <div class="logo1" ><a style="text-decoration: none; color: black" href="view/public_khuyenmai.php" >Special Offers</a></div>
        <div class="logo1">Contacts</div>
      
      </div>
      <div align="center" style="width: 100%; height: 600px; background-color: white; position:relative; top:50px">
      <?php include 'view/anhchinh.php';?>
      </div>

      <div style="width: 100%; height: 720px; ">
            <div class="mota2" style="margin-top: 100px;"> 
              <div class="mota3"> 
                  <div class="mota4" >
                      <div class="mota6" >
                        <img class="mota6" src="img/mota/mota1.png"  alt="">
                      </div>
                      <div class="mota5" style="background:white; border: 5px solid rgb(193, 233, 244); padding: 20px;" > 
                    <p> Sứ mệnh của khách sạn Lotus là mang đến cho người Việt Nam một trải nghiệm nghỉ dưỡng tinh khiết, cao quý và trường tồn,
                     giống như hình ảnh của hoa sen - biểu tượng của Việt Nam.Lotus cam kết cung cấp dịch vụ chất lượng cao,
                      tạo ra một không gian thoải mái và lịch sự cho khách hàng. Mỗi khách hàng khi đến với khách sạn Lotus sẽ được 
                      tận hưởng sự tinh tế trong từng chi tiết, từ thiết kế phòng ốc, dịch vụ tiện ích cho đến ẩm thực đặc sắc.
                      Khách sạn Lotus không chỉ là nơi nghỉ ngơi lý tưởng, mà còn là nơi để khách hàng trải nghiệm và khám phá văn hóa Việt Nam
                      phong phú qua các hoạt động văn hóa độc đáo do chúng tôi tổ chức.</p>
                    </div>
                      
                  </div>
              </div>
              <div class="mota7">
                  <div class="mota4">
                      <div class="mota6">
                        <img class="mota6" src="img/dichvu/dv17.jpg" alt="">
                      </div>
                      <div class="mota5" style="background:white;background:white; border: 5px solid rgb(193, 233, 244);padding: 20px; "> <p>Bên cạnh đó, khách sạn Lotus cũng hiểu rằng sự trường tồn
                       và phát triển bền vững là một phần quan trọng của sứ mệnh của mình.Chúng tôi cam kết hoạt động một cách có trách nhiệm với môi trường và cộng đồng,
                       góp phần vào sự phát triển bền vững của ngành du lịch Việt Nam.Tại khách sạn Lotus, chúng tôi không chỉ mang đến cho bạn một nơi nghỉ dưỡng,
                      mà còn mang đến cho bạn một trải nghiệm tinh túy của văn hóa và giá trị Việt Nam. Chúng tôi rất hân hạnh được phục vụ bạn. </p> </div>
                      
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
      <div style="  background:rgb(193, 233, 244); height:400px">
        <h2 style="font-size:20px; margin-top: 5%;"> Ưu Đãi </h2>
            <div align="center" class="uudai1">
                <div class="uudai2">
                <img src="img/khuyenmai/km01.png" alt="" width="100%" height="300px">
                </div>
            </div>
            <div align="center" class="uudai1">
                <div class="uudai2">
                <img src="img/khuyenmai/km02.png" alt="" width="100%" height="300px">
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

    <div class="loaiphong" >
        <h2  style="font-size:20px;">LOẠI PHÒNG</h2>
      <div class="loaiphong1" style="margin-left: 15px;">
        <div class="loaiphong2"><img src="img/loaiphong/phong4.jpg" alt="" width=100% height=200px></div>
        <p class="p.loaiphong">Suite</p>
      </div>
      <div class="loaiphong1">
      <div class="loaiphong2"><img src="img/loaiphong/phong3.jpg" alt="" width=100% height=200px></div>
        <p class="p.loaiphong">Deluxe</p>
      </div>
      <div class="loaiphong1">
      <div class="loaiphong2"><img src="img/loaiphong/phong2.jpg" alt="" width=100% height=200px></div>
        <p class="p.loaiphong">Superior</p>
      </div>
      <div class="loaiphong1" style="margin-left: 15px;">
      <div class="loaiphong2"><img src="img/loaiphong/phong1.jpg" alt="" width=100% height=200px></div>
        <p class="p.loaiphong">Standard</p>
      </div>
    </div>

        <div class="diadiemnoibat" style="border: 10px solid rgb(193, 233, 244)">
        <h2  style="font-size:20px;">ĐỊA ĐIỂM NỔI BẬT</h2>
            <div class="anhdiadiem">
              <div>
              <img class="circle" src="img/diadiemnoibat/dnb1.jpg" alt="" width="320" height="320">
              </div>
              <img class="circle" src="img/diadiemnoibat/dnb2.jpg" alt="" width="320" height="320">
              <img class="circle" src="img/diadiemnoibat/dnb3.jpg" alt="" width="320" height="320">
              <img class="circle" src="img/diadiemnoibat/dnb4.jpg" alt="" width="320" height="320">
            </div>
      </div>

      <div class="layout_danh_gia_noi_bat" style="background-color: rgb(193, 233, 244)">
        <h1 style="text-align: center"><b>ĐÁNH GIÁ NỔI BẬT</b></h1>
        <div class="danh_gia" style="background-color: rgb(132, 193, 219);">
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

        <div class="danh_gia" style="background-color: rgb(132, 193, 219);">
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
      <div class="dat_phong" style="background-color: rgb(55, 117, 140)">
        <div class="dat_phong1" style="top: 10px;left: 2%;background-color: #eff4f8;"></div>
        <div class="dat_phong1" style="top: 10px;left: 27%;background-color: #eff4f8;"></div>
        <div class="dat_phong1" style="top: 10px;left: 52%;background-color: #eff4f8;"></div>
        <div class="dat_phong2" style="top: 10px;left: 77%;background-color:rgb(27, 54, 73)              "></div>
      </div>
      <div class="layout_thong_tin" style="background-color: rgb(193, 233, 244)">
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
