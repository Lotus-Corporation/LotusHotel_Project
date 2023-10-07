<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="./css/style.css"> 
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
            }
        }
    ?> 
  </body>
</html>
