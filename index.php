
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
    <?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from loaiphong";
$result=$link->query($sql);
?>
     
  </head>
  <body>
   <div class="container"> 
     <div style="float: center; width: 100%; position: fixed; z-index: 1;">
      <div align="center" class="logo1" style="background-color: rgb(109, 194, 230);" ;="">
        <p><font face="Courier New" size="5" color="WHITE">ROOMS</font></p>
        <div class="menu">
          
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
        <div align="center" class="logo1" style="background-color: rgb(28, 107, 225)" ;=""></div>
        <div align="center" class="logo1" style="background-color: rgb(106, 160, 193)";=""></div>
        <div align="center" style="float: left; width: 40%; height: 50px; background-color: rgb(237, 240, 241); ";=""> LOGO</div>
        <div align="center" class="logo1" style="background-color: rgb(14, 157, 197)";=""></div>
        <div align="center" class="logo1" style="background-color: rgb(23, 53, 151)" ;=""></div>
        <div align="center" class="logo1" style="background-color: rgb(53, 91, 101)";=""></div>
      </div>
        <div
          align="center" style="width: 100%; height: 600px; background-color: rgb(194, 233, 255); position:relative; top:50px">ẢNH
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
        <button class="timkiem" onclick="alert('kakak')">CHECK ROOM</button> 
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
    
      <br>
      <div class="phong_noi_bat">
        <h3 class="lable">PHONG NOI BAT</h3>
        <div class="pnb_anh">. . . Ả N H</div>
        <div class="pnb_anh">. . . Ả N H</div>
        <div class="pnb_anh">. . . Ả N H</div>
        <div class="pnb_anh">. . . Ả N H</div>
      </div>
      <br>
      <div class="dich_vu">
        <h3 class="lable">DICH VU</h3>
        <div class="dv_anh1">. . . Ả N H</div>
        <div class="dv_anh2">. . . Ả N H</div>
        <br >
        <div class="dv_anh1">. . . Ả N H</div>
        <div class="dv_anh2">. . . Ả N H</div>
        <br>
        <div class="dv_anh1">. . . Ả N H</div>
        <div class="dv_anh2">. . . Ả N H</div>
      </div>



    <div class="loaiphong" >
        <b>LOẠI PHÒNG</b>
      <div class="loaiphong3" style=" margin-top: 40px; margin-right: 30px">
        <div class="loaiphong2">Ảnh</div>
      </div>
      <div class="loaiphong1">
        <div class="loaiphong2">Ảnh</div>
      </div>
      <div class="loaiphong1">
        <div class="loaiphong2">Ảnh</div>
      </div>
      <div class="loaiphong3" style=" margin-top: 22px; margin-right: 10px">
        <div class="loaiphong2">Ảnh</div>
      </div>
    </div>

    
  <div class="diadiemnoibat">
        <h4  >ĐỊA ĐIỂM NỔI BẬT</h4>
    <div class="anhdiadiem">
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
      <div class="circle"></div>
    </div>
  </div>
    

      <div class="layout_danh_gia_noi_bat">
        <h1 style="text-align: center"><b>ĐÁNH GIÁ NỔI BẬT</b></h1>
        <div class="danh_gia">
          <div class="anh_dai_dien"></div>
          <div class="comment">
            klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna;
            knjn lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
            jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEkjdc nc wjj
            ammwlkcnln cnken jkachuiwh lcneuh akehc H[ OISH;I uhiy yguy guyg it7i 
          </div>
        </div>

        <div class="danh_gia">
          <div class="anh_dai_dien"></div>
          <div class="comment">
            klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna;
            knjn lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
            jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
          </div>
        </div>

      </div>
      <div class="loi_goi">
        <h3>HÃY BẮT ĐẦU TRẢI NGHIỆM </h3>
        <h2>TÊN</h2>
      </div>
      <div class="dat_phong">
        <div class="dat_phong1" style="top: 10px;left: 2%;"></div>
        <div class="dat_phong1" style="top: 10px;left: 38%;"></div>
        <div class="dat_phong2" style="top: 10px;left: 75%;"></div>
      </div>
      <div class="layout_thong_tin">
        <div class="thong_tin">
          <h1>Ten KS</h1>
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
        <div class="thong_tin">
          <h1>Lien He</h1>
          0316546156 <br />
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
        <div class="thong_tin">
          <h1>Quick Links</h1>
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
        <div class="thong_tin">
          <h1>Apps</h1>
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
      </div>
    </div>
  </body>
</html>