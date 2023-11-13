<link rel="stylesheet" href="css/menu-logo.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<?php 
  $link=new mysqli("localhost", "root","","khachsan");
  $sql="select * from LOAIPHONG";
  $result=$link->query($sql);
?>
<div id="header" class="thanh_logo1">
  <a  style="float:left; font-size: 30px;margin-left:20px;" href="">
  <i class="fa fa-bars"></i>
  </a>
  <a  style="float:left; font-size: 35px;margin-left:20px; " href="index_menu.php">
  <i class="fa fa-home"></i>
  </a>
  <div class="logo1" >Our rooms
    <div class="menu" >
        <?php
          while ($row=$result->fetch_assoc())
          {
        ?>   
            <a href="index_menu.php?pid=8&&malp=<?php echo $row["MA_LOAIPHONG"] ?>"> <?php echo $row["LOAIPHONG"];?></a>
        <?php
          }
        ?>
    </div>
  </div>
  <a class="logo1" href="index_menu.php?pid=2" >Services</a>
  <a class="logo1" href="index_menu.php?pid=3"> Restaurant </a>
  <a class="logo" href="index_menu.php">
    <img src="img/logo.png" alt="" ></a> 
  <a class="logo1" href="index_menu.php?pid=4">Spa&Wellness</a>
  <a class="logo1" href="index_menu.php?pid=5" >Special Offers</a>
  <a class="logo1" href="index_menu.php?pid=6">Contacts</a>
  <?php 
    session_start();
    if(isset($_SESSION['user_client']))
    {
      $username = $_SESSION['user_client'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from KHACHHANG_ACCOUNT where USERNAME='$username'";
    $result=$link->query($sql);
    $row = $result->fetch_assoc();
    if(isset($_SESSION["cart"])) {
  ?>
  <a style="float:left; font-size: 35px; margin-right:20px;position:relative" href="view/public_giohang.php">
    <i class="fa fa-shopping-cart">
      <span class="sl">
        <?php echo count($_SESSION["cart"]);}?>
      </span>
    </i> 
</a> 
  <div id="client">
    <div id="client_anh" style=" background-image: url('img/khachhang/<?php echo $row["ANHKH"]?>')">
    <div id="menu_client">
      <a href="view/profile_khachhang.php">View Profile</a>
      <a href="quantri/control/ctrl_logout.php">Log Out</a>
    </div>
    </div>
  </div>
  <?php 
  } else{
  ?>
  <a style="float:left; font-size: 35px; margin-right:20px;" href="view/public_giohang.php">
    <i class="fa fa-shopping-cart"></i>
  </a>
    <a  style="float:left; font-size: 30px; margin-right:20px;" href="view/login.php">
    <i class="fa fa-user"></i>
    </a>
  <?php
  }
  ?>
  

</div>
<script>
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      var header = document.getElementById("header");
      if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        header.classList.add("shrink");
      } else {
        header.classList.remove("shrink");
      }
    }
  </script>



      
