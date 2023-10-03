<link rel="stylesheet" href="./css/menu-logo.css"> 
<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from loaiphong";
$result=$link->query($sql);
?>
      
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
