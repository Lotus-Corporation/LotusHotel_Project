<link rel="stylesheet" href="./css/phongnoibat.css"> 

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "khachsan";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
  die("Kết nối thất bại: " . $conn->connect_error);
}

$sql = "SELECT DONGIAPHONG, LINK_ANH FROM PHONG";
$result = $conn->query($sql);

echo "<div id='phongnoibat'>
        <div class='div_phongnoibat'>
            <span class='hieuung left' style='display: block;'><span style='display: inline;'></span></span>
            <span class='hieuung right' style='display: block;'><span style='display: inline;'></span></span>
            
          <ul class='ul'>";


if ($result->num_rows > 0) {
  // xuất dữ liệu của mỗi hàng
  $i = 0;
  while($row = $result->fetch_assoc()) {
    $class = "";
    if ($i % 3 == 0) {
      $class = "dau";
    } elseif ($i % 3 == 2) {
      $class = "cuoi";
    }
    echo "<li class='" . $class . "'>
            <a href='#' class='thanh_hinhanh'>
              <img src='" . $row["LINK_ANH"] . "' alt='Phòng khách sạn' class='hinh_anh'>
              <div class='overlayy'>
                <p class='price'> Giá: " . $row["DONGIAPHONG"]. "VND</p>
              </div>
            </a>
          </li>";
    $i++;
  }
} else {
  echo "0 results";
}

echo "</ul>
    </div>
    <a class='mo_toanbo' href='javascript:;'> Xem Tất Cả Các Phòng </a>
  </div>";
  
$conn->close();
?>


