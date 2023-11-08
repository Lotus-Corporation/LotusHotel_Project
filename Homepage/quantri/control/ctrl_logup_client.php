<?php
$username=$_POST["username"];
$hoten=$_POST["hoten"];
$email=$_POST["email"];
$sdt=$_POST["sdt"];
$cccd=$_POST["cccd"];
$pass=$_POST["pass"];
$link=new mysqli("localhost","root","","khachsan");
$sql_check = "SELECT * FROM KHACHHANG_ACCOUNT WHERE USERNAME = '$username'";
$result = $link->query($sql_check);

if ($link->query($sql_check)->num_rows > 0) {
    echo "
      <script>
          alert('USERNAME ĐÃ TỒN TẠI!');
          setTimeout(function(){
              window.location.href = '../../view/logup.php';
          }, 50);
      </script>";
} else{
  $sql="INSERT INTO KHACHHANG_ACCOUNT(USERNAME,HOTEN,EMAIL,SDT,CCCD,PASS) 
  VALUES ('$username','$hoten','$email','$sdt','$cccd','$pass')";
  if ($link->query($sql) === TRUE) {
      header("location:../../view/login.php");
    } else {
      echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $link->error;
    }
}
?>