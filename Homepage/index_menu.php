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
                case 1: 
                    include("home.php");
                    break;
                case 2:
                    include("view/public_dichvu.php");
                    break;
                case 5:
                  include("view/public_khuyenmai.php");
                  break;
                case 9:
                  include("view/formcheckphong/kqtimkim.php");
                case 8:
                  include("view/public_loaiphong.php");
                  break;
            }
        }
    ?> 
  </body>
</html>
