<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link href="css/font-awesome.min.css" rel="stylesheet"/>

<style>
     body{
        margin: 0;
    }
    .layout_anh{
        width: 100%;
        height: 800px; 
        position:relative; 
        background-image: url('img/dichvu/spa.jpeg');
        background-attachment: fixed;
        background-position: center bottom;
        background-size: cover;
        margin-bottom: 7%;
    }   
    .layout_anh_opacity{
        width: 100%;
        height: 800px; 
        position:absolute; 
        top:0;
        background-color: black;
        opacity:0.2;
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
        width: 150px;
        position: relative;
        left: 220px;
        display: block;
        line-height:3;
        text-align: center;
        height: 50px;
        padding:0 10px;
        color: rgb(56, 187, 223);
        font-size:18px;
        cursor: pointer;
        font-weight: bold;
    }
.khungtren:hover {
        color: rgb(5, 92, 116);
    }
p,pre,.mota2, .khungtren,li{
        font-family:Jost,sans-serif;
        word-spacing: 1px;
        letter-spacing: 1px;
        font-size: 20px;
        color:#494949;
    }
.noidung {
        width: 75%;
        padding:20px;
        position: absolute;
        top: 50px;
        left: 5%;
        background: white;
        text-align:left
    }
li{

        border-bottom: 1px solid #d2d2d2 ;
        padding: 10px;
        font-size: 17px;
        width: 94%;
}
ul{
        list-style-type: none;
    }
.mota1{
        font-family: Jost,sans-serif;
        font-size:25px; 
    }
.layout_menu{
        height: 800px;
        text-align:center;
        background-color:rgb(212, 227, 237);
        padding: 40px;

    }
    .chon:checked + .khungtren {
        background: white;
        color:black;
        transition: all 0.5s;
    }
    .chon:checked + label + .noidung {
        z-index: 1;
        transition: all 0.35s;
    }
</style>


<div class="layout_anh">
    <div class="layout_anh_opacity"></div>
    <div class="loigoi">
        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px; margin-bottom:5%; margin-left:20px">RELAX WITH LOTUS SPA</div>
        <div style="font-size:45px;margin-left:18px">SPA & WELLNESS</div>
    </div>
</div>

<div style="margin-top:180px;height:560px;margin-left:50px;">
    <div style="float:left; width:50%;">
    <p >LOTUS SPA</p>
    <h1> Tổng quan </h1>
    <pre>
    Lorem ipsum dolor sit amet, nisl scaevola has ne, veniam detracto 
    et mel,ei eum dolor partiendo repudiare. Docendi erroribus at has, 
    nonumy equidem mea eu, sed alienum perfecto eleifend ne. Suas 
    insolens et nam, sit congue fastidii ea, his facer meliore te. 
    Duo laoreet patrioque similique ad. Nam ei impetus definiebas, 
    has ea essent expetenda. Libris accusam principes ut vix, vel ad 
    partem delectus, ad eos posse mundi.</pre>
    <br>
    <p> Open daily: 6:30 AM - 8.30 PM </p>
    </div>
    <div class="anh">
       <img src="img/dichvu/spa1.jpg" style=" height: 400px;width:650px;box-shadow: 50px 50px lightgray;float:left; ">
    </div>
</div>

   <div align="center" style="height:400px;background-color:rgb(212, 227, 237);padding:80px;" >
   <div class="mota1" style="font-size:20px;margin-bottom: 1%;">BOOK & EXPERIENCEA</div>
    <div style="font-size:40px; padding:40px">BOOK SERVICE</div>
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


   <div style="height:600px;background-color:white; position: relative;">
    <div style="width:25%; height:100%; background-color:rgb(56, 187, 223);float:left;">
    <div class="mota1" style="font-size:20px;margin-bottom: 1%;padding:80px; margin-top:100px">EXPLORE LOTUS SPA</div>
        <div style="font-size:40px;margin-left:30px">PHOTO GALLERY</div>
    </div>
    <div style="text-align:center; position:relative; left:-140px">
    </div> 
    <div style="height:60%; display: flex; flex-wrap: wrap; justify-content: space-between">
        <img src="img/dichvu/spa6.jpg" style="width:30%; height:250px; margin:10px;margin-top:40px">
        <img src="img/dichvu/spa4.jpeg" style="width:30%; height:250px; margin:10px;margin-top:40px">
        <img src="img/dichvu/spa3.jpg" style="width:30%; height:250px; margin:10px;margin-top:40px">
        <img src="img/dichvu/spa5.jpg" style="width:30%; height:250px; margin:10px">
        <img src="img/dichvu/spa7.jpg" style="width:30%; height:250px; margin:10px">
        <img src="img/dichvu/spa8.jpg" style="width:30%; height:250px; margin:10px">
    </div>
</div>





   
    <div class="layout_menu">
    <div class="mota1" style="font-size:20px;margin-bottom: 1%">LOTUS SPA</div>
    <div style="font-size:40px">SERVICES OFFERINGS</div>
    <div style="position: relative;top:7%;width:80%;left:15%">

        <div  style="float:left">
            <input type="radio" name="spa" id="Facial" checked class="chon">
            <label for="Facial" class="khungtren" text-align="center">FACIAL</label>
            <div class="noidung">
                <ul>
                    <li> 1.Basic Facial Care - 45'
                      <br>A reviving facial which includes a deep cleanse, exfoliation, soothing facial
                      massage and finally moisturizing treatment using the finest of skin care products leaving
                      your skin refreshed and nourished.
                    </li>
                    <li>2. Natural Skin Dream - 60'
                      <br>This facial has been described as an experience in its own right. Using a natural
                      yoghurt-based face mask, this all-in-once facial cleanses, soothes, nourishes and balances
                      the skin leaving it radiant and glowing.
                    </li>
                    <li>3. Silky Beauty - 60'
                    <br>Begin with a skin cleanse and massage followed by the application of a thin, rich, velvety 
                    cream mask. A head massage stimulates the nerves and blood vessels beneath the skin whilst 
                    also calming muscle tension. The cream mask is then removed and your face is moisturized leaving 
                    the skin soft and silky smooth.
                    </li>
                    <li>4. Lifting Feather - 60'
                    <br>Experience complete relaxation with a Vietnamese manual facelift technique. The clay mask is then 
                    applied to draw out excess oil from the pores while retaining moisture and hydration. This facial 
                    treatment is tailored to make your skin feeling light as a feather.
                    </li>
                </ul>
            </div>
          </div>
          <div style="float: left;">
            <input type="radio" name="spa" id="Foots" class="chon">
            <label for="Foots" class="khungtren">FOOTS</label>
            <div class="noidung">
                <ul>
                    <li>1. Essential Oils Foot Therapy - 60'
                    <br><br>Experience overall healing and wellbeing as your therapist focuses on the pressure 
                    points of your feet through deep tissue massage with essential oils. The process is 
                    similar to Reflexology whilst the oil leaves your skin soft and smooth.</li>
                    <li>2. Foot Remedy - 60'
                    <br><br>A foot Massage using hot stones applied to your legs and feet. 
                      Feet can typically take a lot of heat and the combination of pressure massage with the 
                      warmth of hot stones instils a sense of relaxation, helping to restore, rebalance and 
                      rejuvenate the body.</li>
                    <li>3. Total Foot Treatment - 75'
                    <br><br>A complete care package and ultimate treat for feet. This treatment combines a foot massage 
                      focusing on pressure points with a dry and wet scrub to remove dead skin, leaving your feet 
                      silky smooth. It is an invigorating ‘facelift’ for your feet.</li>
                    <li>4. Milk and Honey Wrap for Feet
                    <br><br>Milk and honey have moisturizing properties that soften the skin, making your feet smooth.
                    </li>
                </ul>
            </div>
          </div>
          <div style="float: left;">
            <input type="radio" name="spa" id="Body" class="chon">
            <label for="Body" class="khungtren">BODY</label>
            <div class="noidung">
                <ul>
                    <li>1. Relaxation Treatment - 60' 90'
                    <br>Applying gentle soothing massage techniques with local aromatic oils, the aim is to r
                    emove overall tension, relieve swollen or painful joints and balance one’s emotions.</li>
                    <li>2. Tension Relief Therapy - 60' 90'
                    <br>This facial has been described as an experience in its own right. Using a natural 
                    yoghurt-based face mask, this all-in-once facial cleanses, soothes, nourishes and balances 
                    the skin leaving it radiant and glowing./li>
                    <li>3. Hot Stone Massage - 60' 90'
                    <br>Using strong massage techniques combined with essential oils, this treatment targets 
                    key muscle groups to relieve aches and pains. Smooth flowing rhythmic movements also help 
                    improve circulation and stimulate an overall sense of wellbeing and balance.</li>
                    <li>4. Himalayan Salt Stone Massage - 60' 90'
                    <br>This special therapy uses a blend of pure essential oil and natural salt rock crystal 
                    formed 250million years ago in ancient seas beneath the Himalayan Mountains. The healing 
                    massage technique combined with warm salt stones balances the central nervous system. It 
                    gently soothes the accumulation of stress and tension, helps remove toxins while infusing 
                    healthy minerals into the skin.
                    </li>
                </ul>
            </div>
          </div>
          <div style="float: left;">
            <input type="radio" name="spa" id="SKIN" class="chon">
            <label for="SKIN" class="khungtren">SKIN</label>
            <div class="noidung">
                <ul>
                    <li>1. Lotus Spa Body Scrub - 45'
                    <br><br> Lotus Spa’s moisturizing body scrub provides a deep cleaning and exfoliating treatment. 
                      Dead skin cells are removed whilst the growth of healthy new ones are promoted. Mineral 
                      sea salt and olive oil help to remove impurities and stimulate blood circulation.</li>
                    <li>2. Mud & Milk Body Wrap - 45'
                    <br><br> Harnessing the power of natural vitamins and minerals this body wrap helps improve the 
                      appearance and feel of skin. It draws toxins from the body and helps hydrate, tone and 
                      smooth the skin.</li>
                    <li>3. Medical Standard Skin Care Service
                    <br><br>This service provides your skin with hydration and nutrients, tightens pores, 
                    and makes your skin more supple and radiant. It also prevents and helps treat various 
                    skin problems such as acne, dark spots, freckles, dry skin, and aging skin.
                    </li>
                    <li>4. Electrical Serum Vitamin C Technologe
                    <br><br>This brings a new level of health and vitality to your skin.
                    </li>
                </ul>
            </div>
          </div>
          </div>
        </div>
   </div>

   