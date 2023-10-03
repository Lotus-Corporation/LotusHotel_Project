<!DOCTYPE html>
<html lang="en">
<head>
<title>qtks</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 500px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>



<header>
  <h2>Quản lý khách sạn</h2>
</header>

<section>
  <nav>
    <ul >
      <li><a href="./admin_loaiphong.php"><h1>Loại phòng</h1></a></li>
      <li><a href="./admin_chinhanh.php"><h1>Chi nhánh</h1></a></li>
      <li><a href="./admin_khuyenmai.php"><h1>Khuyến mãi</h1></a></li>
      <li><a href="./admin_nhanvien.php"><h1>Nhân viên</h1></a></li>
      <li><a href="./admin_nkdp.php"><h1>Nhật ký đặt phòng</h1></a></li>
      <li><a href="./admin_ctnkdp.php"><h1>Chi tiết nhật ký đặt phòng</h1></a></li>
      <li><a href="./admin_dichvu.php"><h1>Dịch vụ</h1></a></li>
      <li><a href="./admin_nksddv.php"><h1> NKSD Dịch vụ</h1></a></li>
      <li><a href="./admin_ctnksddv.php"><h1> Chi tiết NKSD Dịch vụ</h1></a></li>
    </ul>
  </nav>
  
  <article>
    <h1></h1>
    <p></p>
    <p></p>
  </article>
</section>

<footer>
  <p></p>
</footer>

</body>
</html>
