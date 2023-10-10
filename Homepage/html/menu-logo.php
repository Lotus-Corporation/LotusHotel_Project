<link rel="stylesheet" href="./css/menu-logo.css"> 
<?php 
  $link=new mysqli("localhost", "root","","khachsan");
  $sql="select * from LOAIPHONG";
  $result=$link->query($sql);
?>
<div class="thanh_logo1">
  <a class="icon" href="index_menu.php?pid=1">
    <img src="https://img.icons8.com/?size=256&id=2797&format=png" height="35px">
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
  <a class="icon" href="index_menu.php?pid=7">
    <img src="https://img.icons8.com/?size=256&id=9720&format=png" height="35px">
  </a>
</div>
      

      