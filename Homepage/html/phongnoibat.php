<link rel="stylesheet" href="./css/phongnoibat.css"> 
<link rel="stylesheet" href="css/https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="./js/js.js"></script>
<link rel="stylesheet" type="text/css" href="./css/slick.css"/>
<script src="./js/js2.js"></script>

<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql = "
    (SELECT * FROM PHONG WHERE MA_LOAIPHONG='STD' LIMIT 1)
    UNION ALL
    (SELECT * FROM PHONG WHERE MA_LOAIPHONG='DLX' LIMIT 1)
    UNION ALL
    (SELECT * FROM PHONG WHERE MA_LOAIPHONG='SUP' LIMIT 2)
    UNION ALL
    (SELECT * FROM PHONG WHERE MA_LOAIPHONG='SUT' LIMIT 2)
";

    $result=$link->query($sql);
?>

<div class="mau_layout" style="
    height: auto;
    padding: 2em;
">
    <div class="loigoi">
        <h3  style="
    font-weight: normal;
">Một số phòng nổi bật của chúng tôi</h3>
    </div>
    

    <div class="carousel">
        <?php
        while ($row=$result->fetch_assoc())
        {
        ?>
        <div class="layout">
            <a href="">
                <div class="layout_con">
                    <img src="img/phong/<?php echo $row["ANHPHONG"]; ?>">
                    <div class="price">Price:<b> <?php echo $row["DONGIAPHONG"] ?>đ</b></div>
                    <div class="cart"><i class="fa fa-shopping-cart"> Add to cart</i></div>
                    <div  class="tenphong">
                        <div><h2><?php echo $row["TENPHONG"] ?></h2></div>
                        <i class="fa fa-bed" aria-hidden="true">1 bed</i>
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



<script type="text/javascript">
$(document).ready(function(){
  $('.carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 800,
    prevArrow: '<button type="button" class="slick-prev" style="background: transparent; border: none;  "> <img src="./img/anhphongnoibat/mt.png" alt="some_text" style="opacity:0.4;filter:alpha(opacity=40); padding: 0 0 0 29px;;"/></button>',
    nextArrow: '<button type="button" class="slick-next" style="background: transparent; border: none; padding: 4px"> <img src="./img/anhphongnoibat/mt2.png" alt="some_text" style="opacity:0.4;filter:alpha(opacity=40)"/></button>'
  });
});
</script>

