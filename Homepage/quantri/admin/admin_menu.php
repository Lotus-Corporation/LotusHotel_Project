<html>
<style>
    .menu_left{
      width: 15%;
      height: auto;
      background-color:antiquewhite;
      position: fixed;
      border-radius: 10px;
      margin: 4.5% 3.5%;
    }
    .admin{
      height: 50px;
      width: 100%;
      background-color: darkgray;
      color: white;
      line-height: 3;
      text-align: center;
      border-radius: 10px 10px 0 0;
    }
    .menu_left >div > a {
      text-decoration: none;
      border-style: dotted;
      border-width: 0 0 0.1px 0;
      color: black;
      float: left;
      width:90%;
      padding: 5%;
      
    }
    .menu_left > div > a:hover {
    color: brown;
    font-weight: bold; 
  }
  .menu_left:hover {
  
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5); /* Đổ bóng khi hover */
  }
    .menu_middle{
      width: 100%;
      height: 55px;
      background-color: gray;
      position: fixed;
      z-index: 1;
      margin: -8px
    }
    .menu_middle > a{
      float: right;
      padding: 15px;
      text-decoration: none;
      color: white
    }
    #lotus{
      float: left;
      padding: 17px;
      text-decoration: none;
      color: white;
      font-size: 20px;
    }
    

  </style>
    <body>
      <div class= "menu_middle">
        <a id="lotus" href="../home.php">LOTUS</a>
        <a href=""> Đăng xuất <img src="../img/icon/log_out.png" height="25px"></a>
        <a href=""> Trang chủ <img src="../img/icon/home.png" height="25px"></a>
      </div>
    <div class="menu_left">
      <div class="admin"> Admin menu</div>
      <div>
        <a href="index_menu_admin.php?pid=10">Loại phòng</a>
        <a href="index_menu_admin.php?pid=11">Chi nhánh</a>
        <a href="index_menu_admin.php?pid=12">Khuyến mãi</a>
        <a href="index_menu_admin.php?pid=13">Nhân viên</a>
        <a href="index_menu_admin.php?pid=14">Nhật ký đặt phòng</a>
        <a href="index_menu_admin.php?pid=15">Chi tiết nhật ký đặt phòng</a>
        <a href="index_menu_admin.php?pid=16">Dịch vụ</a>
        <a href="index_menu_admin.php?pid=17">NKSD Dịch vụ</a>
        <a href="index_menu_admin.php?pid=18">Chi tiết NKSD Dịch vụ</a>
        <a href="index_menu_admin.php?pid=19">Phương thức thanh toán</a>
      </div>
    </div>
    </body>
</html>