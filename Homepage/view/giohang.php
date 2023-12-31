<?php 
$link=new mysqli("localhost","root","","khachsan");
$sql_km="select * from KHUYENMAI";
$result_km=$link->query($sql_km);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<style>
.khungngoai{
    display: grid;
    grid-template-columns: 60% 40%;
    gap: 20px;
    padding: 40px;
}
.right{
    background-color: rgb(136, 201, 247);
    border-radius: 20px;
    padding: 40px;
    color: #fff;
}
.thongtin{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px
}
.thongtin h1,
.thongtin .group:nth-child(-n+3){
    grid-column-start: 1;
    grid-column-end: 3;
}
.thongtin input
{
    width: 100%;
    padding: 15px 20px;
    box-sizing: border-box;
    border-radius: 20px;
    margin-top: 10px;
    border:none;
    color: black;
}
.tong {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}
.tong div:nth-child(2){
    font-weight: bold;
    font-size: x-large;
}
body{
    font-family: monospace;
}
a{
    text-decoration: none;
}
.sanpham a{
    color: black;
}
.listsp h1{
    border-top: 2px solid  rgb(79, 159, 190);  
    padding: 20px 0;
}
.sanpham img{
    height: 150px;
    width: 250px;
    background-position: center;
}
.sanpham{
    display: grid;
    grid-template-columns: 270px 1fr 100px 120px 80px 30px;
    align-items: center;
    gap: 20px;
    margin-bottom: 30px;
    padding: 0 10px;
    box-shadow: 0 10px 20px #5555;
    border-radius: 20px;
    background-color:white
}
.name,
.tonggia{
    font-size: large;
    font-weight: bold;
}
.button{
    width: 100%;
    height: 40px;
    border: none;
    border-radius: 20px;
    background-color: rgb(79, 159, 190) ;
    margin-top: 20px;
    font-weight: bold;
    color: #fff;
}
.button:hover {
    background-color:rgb(167, 215, 249)
}
p {
    font-size:20px;
    text-align:center
}

.soluong input,.soluong1 input {
    width:25px;
    text-align: center;
}
.soluong button {
    font-size:17px;
    background: none;
    border: none;
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
.update{
    position: absolute;
    left: 50%;
    top:22%;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    border-radius: 10px
}
.update:hover{transform: scale(1.02)}
.group button{
    border:none;
}
#danhsach{
    background-color:transparent;
    width: 208%;
    padding: 20px 0;
    border-top: solid 1px rgb(38, 98, 141);
    border-bottom: 1px solid rgb(38, 98, 141);
    text-align: center;
    color: #fff;
    font-family: monospace;
}
#danhsach:hover{
    border-top:solid 1.5px rgb(5, 85, 143);
    border-bottom:solid 1.5px rgb(5, 85, 143);
    transform: scale(1.005);
    cursor: pointer;
}
#cancel{
    position: absolute;
    top:10px;
    right:10px;
    padding:10px 20px;
    cursor: pointer;
    background-color: transparent;
    font-weight: bolder;
}
#ok{
    position: absolute;
    bottom: 7%;
    right: 7%;
    padding:15px 30px;
    border-radius:5px;
    background-color: rgb(136, 201, 247);
    color: #fff;
    font-weight: bold;
}
dialog{
    margin-top: 5px;
    width: 40%;
    height: 83%;
    padding:50px;
    border: none;
    border-radius:5px;
    background-color: aliceblue;
}
.dialog_con{
    margin-top: 7%;
    height: 500px;
    border: none;
    overflow-y: scroll;
    
}
td{
    padding:10px;
    border-bottom: 1px solid rgb(38, 98, 141)
}
td:hover{
    border-bottom: 2px solid rgb(5, 85, 143);
}
#ok:hover {
    cursor: pointer;
    background-color: lightgrey;
    
    background-color: rgb(105, 190, 251);
    transform: scale(1.015)
}

.luu_y{
    margin-top: 8%;
    font-size: 13px;
}
.dskm{
    position: absolute;
    top:5%;
    font-size: 25px;
}


</style>

<body>
<p> LOTUS HOTEL </p> 
<form method="post" action="public_giohang.php?action=submit">
    <div class="khungngoai">
        <div class="listsp">
            <a href="../index_menu.php"><i class="fa fa-reply"> Trang chủ </i></a>
            <h1>Danh sách đã đặt</h1>
            <?php 
            if(!empty($_SESSION["cart"])){
                include ("listsp.php");
            }elseif(empty($_SESSION["cart"])){
                echo"Giỏ hàng trống";
            }
            ?>
        </div>
        <div class="right">
            <h1>BOOKING</h1>
            <div class="thongtin">
<?php 
if(isset($_SESSION['user_client']))
{
    $username = $_SESSION['user_client'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from KHACHHANG_ACCOUNT where USERNAME='$username'";
    $result=$link->query($sql);
    $row = $result->fetch_assoc();
?>
                <div class="group">
                    <label for="name">Họ tên</label>
                    <input type="text" name="name" value="<?php echo $row['HOTEN'] ?>">
                    <lable style="color:red"><?php echo $_SESSION["error_name"];$_SESSION["error_name"]="";?></lable>
                </div>
    
                <div class="group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" name="phone" value="<?php echo $row['SDT']; ?>">
                    <lable style="color:red"><?php echo $_SESSION["error_phone"];$_SESSION["error_phone"]=""; ?></lable>
                </div>
    
                <div class="group">
                    <label for="address">CCCD</label>
                    <input type="text" name="cccd" value="<?php echo $row['CCCD']; ?>">
                    <lable style="color:red"><?php echo $_SESSION["error_cccd"];$_SESSION["error_cccd"]=""; ?></lable>
                </div>
<?php 
} else {
?>
                <div class="group">
                    <label for="name">Họ tên</label>
                    <input type="text" name="name">
                    
                </div>

                <div class="group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" name="phone">
                    
                </div>

                <div class="group">
                    <label for="address">CCCD</label>
                    <input type="text" name="cccd">
                    
                </div>
<?php } ?>
                <div class="group">
                    <label for="ngaydat">Ngày đặt</label>
                    <input type="date" name="ngaydat">
                    <lable style="color:red"><?php echo $_SESSION["error_ngaydat"];$_SESSION["error_ngaydat"]=""; ?></lable>
                </div>
    
                <div class="group">
                    <label for="ngaytra">Ngày trả</label>
                    <input type="date" name="ngaytra">
                    <lable style="color:red"><?php echo $_SESSION["error_ngaytra"];$_SESSION["error_ngaytra"]=""; ?></lable>
                </div>
                <div class="group">
                    <button id="danhsach" type="button">Áp mã khuyến mãi</button>
                    <dialog id="danhsach_km">
                        <div class="dialog_con">
                        <table><?php while($row_km=$result_km->fetch_assoc()){?>
                            <tr>
                                
                                <td>
                                    <?php echo $row_km["MOTA"]?>
                                    
                                </td>
                                <td>
                                    <input type="checkbox" name="soluong_km[<?php echo $row_km["MA_KM"]?>]" value=1>
                                </td>
                            </tr>
                            <?php }?>
                        </table>
                        </div>
                        <div class="dskm"><b>Các khuyến mãi</b></div>
                        <div class="luu_y"><b>Lưu ý: Mỗi phòng, mỗi dịch vụ chỉ áp 1 mã khuyến mãi.</b></div>
                        <button type ="button" id="ok">ÁP MÃ</button>
                        <button type ="button" id="cancel">X</button>
                    </dialog>
                </div>
            </div>
            <div class="return">
                <div class="tong">
                    <div>Tổng số lượng</div>
                    <div><?php echo $tong_sl_phong ?></div>
                </div>
                <div class="tong">
                    <div>Tổng số lượng dịch vụ</div>
                    <div><?php echo $tong_sl_dv ?></div>
                </div>
                <div class="tong">
                    <div>Tổng Tiền Phòng</div>
                    <div><?php echo $tong_tien_phong ?></div>
                </div>
                <div class="tong">
                    <div>Tổng Tiền Dịch vụ</div>
                    <div><?php echo $tong_tien_dv ?></div>
                </div>
                <div class="tong">
                    <div>Tổng Tiền</div>
                    <div><?php echo $tong_tien ?></div>
                </div>
            </div>
            
            <button type="submit "class="button">THANH TOÁN</button>
            
        </div>
    </div>
        </form>
    
</body>
</html>
<script>
(function($) {
  'use strict';

  var $dachsach = $('#danhsach'),
    $dachsach_km = $('#danhsach_km');

    $dachsach.on('click', function() {
    $dachsach_km[0].showModal();
  });
  $('#ok').on('click', function() {
    var selectedValues = $('input[name="soluong_km"]:checked').map(function() {
      return this.value;
    }).get();
    console.log(selectedValues);
    $('#selectedValues').val(selectedValues.join(','));
    $dachsach_km[0].close();
  });
  $('#cancel').on('click', function() {
    $dachsach_km[0].close();
  });

})(jQuery);
</script>