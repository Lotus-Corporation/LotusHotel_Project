<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type='text/javascript' src='script.js'></script>  
  </head>
  <body>
  <?php include ('admin/admin_menu.php')?>
    <?php
        if (isset($_GET["pid"])){
            $id=$_GET["pid"];
            switch ($id){
                case 10: 
                    include("admin/admin_loaiphong.php");
                    break;
                case 11:
                    include("admin/admin_chinhanh.php");
                    break;
                case 12:
                    include("admin/admin_khuyenmai.php");
                    break;
                case 13:
                    include("admin/admin_nhanvien.php");
                    break; 
                case 14:
                  include("admin/admin_nkdp.php");
                  break;
                case 15:
                  include("admin/admin_ctnkdp.php");
                  break;
                case 16:
                  include("admin/admin_dichvu.php");
                  break;
                case 17:
                  include("admin/admin_nksddv.php");
                  break;
                case 18:
                  include("admin/admin_ctnksddv.php");
                  break;
                case 19:
                    include("admin/admin_pttt.php");
                    break;
                case 20:
                    include("admin/admin_phong.php");
                    break;
                case 21:
                    include("admin/admin_ctkm.php");
                    break;
                case 23:
                  include("themsuaxoa/them_chinhanh.php");
                  break;
                case 24:
                  include("themsuaxoa/them_nkdp.php");
                  break;
            
                }
                

        }
    ?> 
  </body>
</html>