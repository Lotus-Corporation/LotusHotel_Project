<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <style>
      
      .images {display: none}
      
      .images img {
      	vertical-align: middle;
        width:100%;
        height:755px;
        filter: brightness(70%);
      }
 
      .carousel-container {
         max-width: 100%;
         position: relative;
         margin: auto;
      }

      .previous, .next {
         cursor: pointer;
         position: absolute;
         top: 50%;
         width: auto;
         padding: 16px;
         margin-top: -22px;
         color: white;
         font-weight: bold;
         font-size: 18px;
         transition: 0.6s ease;
         border-radius: 0 3px 3px 0;
         user-select: none;
      }
      
      .next {
         right: 0;
         border-radius: 3px 0 0 3px;
      }
      

      .previous:hover, .next:hover {
         background-color: rgba(0,0,0,0.8);
      }

      .navigation-dot {
         cursor: pointer;
         height: 15px;
         width: 15px;
         margin: 0 2px;
         background-color: #bbb;
         border-radius: 50%;
         display: inline-block;
         transition: background-color 0.6s ease;
      }
      .active, .navigation-dot:hover {
         background-color: #717171;
      }
      
   </style>
</head>
<body>
   <div class="carousel-container">
   <div style=" text-align: center; position:absolute; top:40%;left:37.3%;color: #fff;z-index:2">
        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px; margin-bottom:5%;" >DISCOVER YOUR VIETNAM</div>
        <div style="font-size:50px">Plan Your Trip with <br> Local Experts</div>
    </div>
    <div class="images">
            <img src="https://www.vistra.com/sites/default/files/styles/spotlight/public/2020-07/Vistra_LP_Banner_Indonesia_3200x1440.jpg?itok=1-YS0e7q">
         </div>
      <div class="images">
         <img src="https://cdn3.ivivu.com/2023/08/Vinpearl-Resort-Spa-Nha-Trang-Bay-ivivu.jpg">
         </div>
         <div class="images">
            <img src="https://demo2.themelexus.com/erios/wp-content/uploads/2019/07/rev_slidehome4_1.jpg">
         </div>
      
         

         <a class="previous" onclick="plusSlides(-1)">❮</a>
         <a class="next" onclick="plusSlides(1)">❯</a>
   </div>
   <br>

   <div style="text-align:center">
      <span class="navigation-dot" onclick="currentSlide(1)"></span>
      <span class="navigation-dot" onclick="currentSlide(2)"></span>
      <span class="navigation-dot" onclick="currentSlide(3)"></span>
   </div>
   <script>
      var currentIndex = 1;
      showSlides(currentIndex);
      function plusSlides(n) {
         showSlides(currentIndex += n);
      }
      function currentSlide(n) {
         showSlides(currentIndex = n);
      }

      function showSlides(n) {
         var i;
         var slides = document.getElementsByClassName("images");
         var dots = document.getElementsByClassName("navigation-dot");
         if (n > slides.length) {currentIndex = 1}
         if (n < 1) {currentIndex = slides.length}
         for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
         }
         for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
         }
         slides[currentIndex-1].style.display = "block";
         dots[currentIndex-1].className += " active";
      }
   </script>
</body>
</html>
