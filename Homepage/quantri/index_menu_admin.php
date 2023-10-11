<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type='text/javascript' src='script.js'></script>  
  </head>
  <body>
  <?php include ('admin_menu.php')?>
    <?php
        if (isset($_GET["pid"])){
            $id=$_GET["pid"];
            switch ($id){
                case 10: 
                    include("admin_loaiphong.php");
                    break;
                case 11:
                    include("admin_chinhanh.php");
                    break;
                case 12:
                    include("admin_khuyenmai.php");
                    break;
                case 13:
                    include("admin_nhanvien.php");
                    break; 
                case 14:
                  include("admin_nkdp.php");
                  break;
                case 15:
                  include("admin_ctnkdp.php");
                case 16:
                  include("admin_dichvu.php");
                  break;
                case 17:
                  include("admin_nksddv.php");
                  break;
                case 18:
                  include("admin_ctnksddv.php");
                  break;
                
            }
        }
    ?> 
  </body>
</html>


