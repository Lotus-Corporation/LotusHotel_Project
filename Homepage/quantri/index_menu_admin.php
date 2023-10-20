<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  </head>
  <body>
  <?php 
  session_start();
  if(isset($_SESSION['user'])){
  ?>
  <?php include ('admin/admin_menu.php')?>
  <?php
  if (isset($_GET["pid"])){
    $id=$_GET["pid"];
    switch ($id){
      case 10: 
          include("admin/admin_loaiphong.php");
          break;
      case 11:
          include("admin/admin_phong.php");
          break;
      case 12:
          include("admin/admin_nkdp.php");
          break;
      case 13:
          include("admin/admin_ctnkdp.php");
          break; 
      case 14:
        include("admin/admin_dichvu.php");
        break;
      case 15:
        include("admin/admin_nksddv.php");
        break;
      case 16:
        include("admin/admin_ctnksddv.php");
        break;
      case 17:
        include("admin/admin_khuyenmai.php");
        break;
      case 18:
        include("admin/admin_ctkm.php");
        break;
      case 19:
          include("admin/admin_nhanvien.php");
          break;
      case 20:
          include("admin/admin_khachhang.php");
          break;
      case 21:
          include("admin/admin_khachhangonline.php");
          break;
      case 22:
        include("admin/admin_chinhanh.php");
        break; 
      case 23:
        include("admin/admin_pttt.php");
        break;
      case 24:
        include("admin/admin_hoadon.php");
        break;
      case 25:
        include("admin/admin_cthd.php");
        break;
      case 26:
        include("themsuaxoa/them_loaiphong.php");
        break;
      case 27: 
        include("themsuaxoa/them_phong.php");
        break;
      case 28:
          include("themsuaxoa/them_nkdp.php");
          break;
      case 29:
          include("themsuaxoa/them_ctnkdp.php");
          break;
      case 30:
          include("themsuaxoa/them_dichvu.php");
          break; 
      case 31:
        include("themsuaxoa/them_nksddv.php");
        break;
      case 32:
        include("themsuaxoa/them_ctnksddv.php");
        break;
      case 33:
        include("themsuaxoa/them_khuyenmai.php");
        break;
      case 34:
        include("themsuaxoa/them_ctkm.php");
        break;
      case 35:
        include("themsuaxoa/them_nhanvien.php");
        break;
      case 36:
          include("themsuaxoa/them_khachhang.php");
          break;
      case 37:
          include("themsuaxoa/them_khachhangonline.php");
          break;
      case 38:
          include("themsuaxoa/them_chinhanh.php");
          break;
      case 39:
        include("themsuaxoa/them_pttt.php");
        break; 
      case 40:
        include("themsuaxoa/them_hoadon.php");
        break;
      case 41:
        include("themsuaxoa/them_cthd.php");
        break;
      }
      
  }
  ?>
  <?php 
  } else echo 'Ra admin.php đăng nhập đi'
  ?>
           
    
  </body>
</html>