<link rel="stylesheet" href="./css/menu-logo.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<style>

</style>
<?php 
  $link=new mysqli("localhost", "root","","khachsan");
  $sql="select * from LOAIPHONG";
  $result=$link->query($sql);
?>
<div class="thanh_logo1">
  <a  style="float:left; font-size: 35px;margin-left:20px;color: rgb(0, 0, 0); " href="">
  <i class="fa fa-bars"></i>
  </a>
  <a  style="float:left; font-size: 35px;margin-left:20px;color: rgb(0, 0, 0); " href="index_menu.php?pid=1">
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
  <a class="logo" href="index_menu.php?pid=1">
    <img src="img/LOGO.png" alt="" width=100% height=130px style="border-style: solid; border-width:0 5px 5px 5px;border-color:rgb(193, 233, 244)"></a> 
  <a class="logo1" href="index_menu.php?pid=4">Spa&Wellness</a>
  <a class="logo1" href="index_menu.php?pid=5" >Special Offers</a>
  <a class="logo1" href="index_menu.php?pid=6">Contacts</a>
  <a  style="float:left; font-size: 35px; margin-right:20px;color: rgb(0, 0, 0);" href="index_menu.php?pid=7">
  <i class="fa fa-shopping-cart"></i>
  </a>
  <a  style="float:left; font-size: 30px; margin-right:20px;color: rgb(0, 0, 0);" href="./view/dangki.php">
  <i class="fa fa-user"></i>
  </a>
</div>
      

      