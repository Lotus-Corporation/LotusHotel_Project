<link rel="stylesheet" href="./css/menu-logo.css"> 
<?php 
  $link=new mysqli("localhost", "root","","khachsan");
  $sql="select * from loaiphong";
  $result=$link->query($sql);
?>
<<<<<<< HEAD
      
<div class="container">
      <div style="width: 100%; position: fixed; z-index: 1; background-color:white;border: 5px solid rgb(193, 233, 244);">
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
          
         <img src="img/LOGO.png" alt="" width=100% height=130px style="border: 5px solid rgb(193, 233, 244); "></div> 
        <div class="logo1">Spa&Wellness</div>
        <div class="logo1" ><a style="text-decoration: none; color: black" href="view/public_khuyenmai.php" >Special Offers</a></div>
        <div class="logo1">Contacts</div>
    
      
      </div>
      <div align="center" style="width: 100%; height: 600px; background-color: white; position:relative; top:50px">
      <?php include 'view/anhchinh.php';?>
      </div>
</div>
=======
<div class="thanh_logo1">
  <a class="icon" href="index_menu.php?pid=1">
    <img src="https://img.icons8.com/?size=256&id=2797&format=png" height="35px">
  </a>
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
  <a class="logo1" href="index_menu.php?pid=2" >Services</a>
  <a class="logo1" href="index_menu.php?pid=3"> Restaurant </a>
  <a class="logo" href="index_menu.php?pid=1">
    <img src="img/LOGO.png" alt="" width=100% height=130px style="border: 5px solid rgb(193, 233, 244); "></a> 
  <a class="logo1" href="index_menu.php?pid=4">Spa&Wellness</a>
  <a class="logo1" href="index_menu.php?pid=5" >Special Offers</a>
  <a class="logo1" href="index_menu.php?pid=6">Contacts</a>
  <a class="icon" href="index_menu.php?pid=7">
    <img src="https://img.icons8.com/?size=256&id=9720&format=png" height="35px">
  </a>
</div>
      
>>>>>>> b2515492e39ef42ab153c23d6490f1d3b7aa4334

      