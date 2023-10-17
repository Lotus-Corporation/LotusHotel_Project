<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type='text/javascript' src='script.js'></script>  
  </head>
  <body>
    <?php include ('html/menu-logo.php');?>
    <?php
        if (isset($_GET["pid"])){
            $id=$_GET["pid"];
            switch ($id){
              // case 0:
              //   include("view/public_dichvu.php");
              //   break;
              // case 1: 
              //     include("home.php");
              //     break;
              case 2:
                include("view/public_dichvu.php");
                break;
              case 3:
                include("view/public_nhahang.php");
                break;
              case 4:
                include("view/public_spa.php");
                break; 
              case 5:
                include("view/public_khuyenmai.php");
                break;
              case 6:
                include("view/public_contact.php");
                break;
              case 9:
                include("view/formcheckphong/kqtimkim.php");
              case 8:
                include("view/public_loaiphong.php");
                break;
          }
        }else {include("home.php");}
    ?> 
    <?php include ('html/thongtin.php');?>
  </body>
</html>
