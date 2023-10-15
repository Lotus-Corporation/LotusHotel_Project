<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link rel="stylesheet" href="css/menu-logo.css">
    <link rel="stylesheet" href="css/public.css"> 
<style>
     body{
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
    .anh {
        float:right; 
        width:50%;
        height: 600px;
    }
    .anh > img{
        transition: 0.7s;
    }
    .anh > img:hover{
        transform: scale(1.04);
        opacity: 0.93
    }
    p {
        font-size:25px;
    }
  

   .thongtin {
        float: left;
        width: calc(50% - 50px);
        margin-right:50px
       
   }

   .booknow {
        width:180px;
        height:60px;
        background-color:rgb(56, 187, 223);
        border:none;
        font-size:20px;
        color:white; 
        margin-top:50px
   }
   .booknow:hover {background-color: rgb(0, 121, 154);}

.chon {
  display: none;
}
.khungtren {
  width: 326.3px;
  position: relative;
  display: block;
  line-height:20px;
  height: 23px;
  padding:14px;
  color: rgb(56, 187, 223);
  font-size:20px;
  cursor: pointer;
  font-weight: bold;
}
.khungtren:hover {
  top: -4px;
}
.noidung {
  height: 325px;
  position: absolute;
  top: 45px;
  left: 0;
  background: white;
  text-align:left;
}
.chon:checked + .khungtren {
  background: white;
  color:black;
  transition: all 0.35s;
}
.chon:checked + label + .noidung {
  z-index: 2;
  transition: all 0.35s;
}
</style>


<div class="layout_anh" style="margin-top:-10px">
    <img src="./img/dichvu/spa.jpeg" style="height: 650px; width:100%">
    <div class="loigoi">
        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px; margin-bottom:5%; margin-left:20px">RELAX WITH LOTUS SPA</div>
        <div style="font-size:45px;margin-left:18px">SPA & WELLNESS</div>
    </div>
</div>

<div style="margin-top:180px;height:560px;">
    <div style="float:left; width:50%">
    <p >LOTUS SPA</p>
    <h1> Tổng quan </h1>
    <p>
Lorem ipsum dolor sit amet, nisl scaevola has ne, veniam detracto et mel,
 ei eum dolor partiendo repudiare. Docendi erroribus at has, nonumy equidem mea eu
 , sed alienum perfecto eleifend ne. Suas insolens et nam, sit congue fastidii ea,
  his facer meliore te. Duo laoreet patrioque similique ad. Nam ei impetus definiebas, has ea essent expetenda.
 Libris accusam principes ut vix, vel ad partem delectus, ad eos posse mundi.</p>
    <p> Open daily: 6:30 AM - 8.30 PM </p>
    </div>
    <div class="anh">
       <img src="./img/dichvu/spa1.jpg" style=" height: 400px;width:85%;box-shadow: 50px 50px lightgray;">
    </div>
</div>

   <div align="center" style="height:400px;background-color:rgb(212, 227, 237);padding:80px;" >
        <p style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px">BOOK & EXPERIENCEA</p>
        <p style="font-size:45px;padding:30px;">BOOK SERVICE</p>
        <div>
           <div class="thongtin"  >
                <p class="fa fa-phone" style="margin-left:470px;font-size:35px;color:rgb(56, 187, 223)"> </p>
                <p style="text-align:right">+84 (0) 492 958 320</p>
           </div>
           <div class="thongtin" > 
                <p class="fa fa-envelope-o" style="margin-left:-430px;font-size:35px;color:rgb(56, 187, 223)"> </p>
                <p style="text-align:left">lotushotel@gmail.com</p>
           </div>
        </div>

        <div>
            <button class="booknow fa fa-check-square-o " > BOOK NOW</button>
        </div>
   </div>

   <div style="height:600px;background-color:white" >
        <div style="width:25%; height:100%; background-color:rgb(56, 187, 223);float:left">
        </div>
        <div  style="text-align:center; position:relative; left:-140px;padding:100px">
           <p style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px;">EXPLORE LOTUS SPA</p>
           <p style="font-size:45px;padding:30px;">PHOTO GALLERY</p>
        </div> 
    </div>
       

   
   <div align="center" style="height:550px;background-color:rgb(212, 227, 237);padding:80px;" >
        <p style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px">LOTUS SPA</p>
        <p style="font-size:45px;padding:30px;">SERVICES OFFERINGS</p>
        <div>
        <div style="position: relative;margin-top:-15px;">
          <div style="float: left;">
            <input type="radio" name="spa" id="Facial" checked class="chon">
            <label for="Facial" class="khungtren">FACIAL</label>
            <div class="noidung"><h1> 1.Basic Facial Care - 45' </h1>
              <p>A reviving facial which includes a deep cleanse, exfoliation,
                 soothing facial massage and finally moisturizing treatment using
                the finest of skin care products leaving your skin refreshed and nourished.</p>
                <h1> 2.Basic Facial Care - 45' </h1>
              <p>A reviving facial which includes a deep cleanse, exfoliation,
                 soothing facial massage and finally moisturizing treatment using
                the finest of skin care products leaving your skin refreshed and nourished.</p>  
            </div>
          </div>
          <div style="float: left;">
            <input type="radio" name="spa" id="Foots" class="chon">
            <label for="Foots" class="khungtren">FOOTS</label>
            <div class="noidung"><h1> 1.Basic Facial Care - 45' </h1>
              <p>A reviving facial which includes a deep cleanse, exfoliation,
                 soothing facial massage and finally moisturizing treatment using
                the finest of skin care products leaving your skin refreshed and nourished.</p>
            </div>
          </div>
          <div style="float: left;">
            <input type="radio" name="spa" id="Body" class="chon">
            <label for="Body" class="khungtren">BODY</label>
            <div class="noidung"><h1> lllllllllll' </h1>
              <p>A reviving facial which includes a deep cleanse, exfoliation,
                 soothing facial massage and finally moisturizing treatment using
                the finest of skin care products leaving your skin refreshed and nourished.</p>
            </div>
          </div>
          <div style="float: left;">
            <input type="radio" name="spa" id="SKIN" class="chon">
            <label for="SKIN" class="khungtren">SKIN</label>
            <div class="noidung"><h1> 1ghjjb 45' </h1>
              <p>A reviving facial whjjbbggggggggggg.</p>
            </div>
          </div>
        </div>
        </div>
   </div>

   