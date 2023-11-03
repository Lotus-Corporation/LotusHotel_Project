<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from KHUYENMAI";
    $result=$link->query($sql);
    // $sql_ctkm="select * from CHITIETKHUYENMAI";
    // $result_ctkm=$link->query($sql_ctkm);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
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
    gap: 20px;
    border-bottom: 1px solid rgb(7, 79, 130);
    padding-bottom: 20px;
}
.thongtin h1,
.thongtin .group:nth-child(-n+3){
    grid-column-start: 1;
    grid-column-end: 3;
}
.thongtin input, 
.thongtin select
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
.listsp h1{
    border-top: 2px solid  rgb(79, 159, 190);  
    padding: 20px 0;
}
.sanpham img{
    height: 150px;
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

.soluong input {
    width:25px
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

</style>

<body>
<p> LOTUS HOTEL </p> 
<form method="post" action="public_giohang.php?action=submit">
    <div class="khungngoai">
        <div class="listsp">
            <a href="../index_menu.php"><i class="fa fa-reply"> keep searching room </i></a>
            <h1>List Product in Cart</h1>
            <?php 
            if(!empty($_SESSION["cart"])){
                include ("listsp.php");
            }elseif(empty($_SESSION["cart"])){
                echo"Giỏ hàng trống";
            }
            ?>
        </div>
        <div class="right">
            <h1>BOOKING ROOM</h1>
            <div class="thongtin">
                <div class="group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" >
                    <?php echo $_SESSION["error_name"];$_SESSION["error_name"]="";?>
                </div>
    
                <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone">
                    <?php echo $_SESSION["error_phone"];$_SESSION["error_phone"]=""; ?>
                </div>
    
                <div class="group">
                    <label for="address">CCCD</label>
                    <input type="text" name="cccd">
                    <?php echo $_SESSION["error_cccd"];$_SESSION["error_cccd"]=""; ?>
                </div>
    
                <div class="group">
                    <label for="ngaydat">Ngày đặt</label>
                    <input type="date" name="ngaydat">
                    <?php echo $_SESSION["error_ngaydat"];$_SESSION["error_ngaydat"]=""; ?>
                </div>
    
                <div class="group">
                    <label for="ngaytra">Ngày trả</label>
                    <input type="date" name="ngaytra">
                    <?php echo $_SESSION["error_ngaytra"];$_SESSION["error_ngaytra"]=""; ?>
                </div>
                <div>
    <?php 
    while($row=$result->fetch_array()){
        $sql_ctkm="select * from CHITIETKHUYENMAI where MA_KM='".$row["MA_KM"]."'";
        $result_ctkm=$link->query($sql_ctkm);
        $row_ctkm=$result_ctkm->fetch_array();
        $value = $row_ctkm["GIATRI_PHANTRAM"] . ',' . $row_ctkm["GIATRI_THUC"];
        var_dump($value);
    ?>
        <input type="checkbox" name="ma_km[]" value="<?php echo htmlspecialchars($value); ?>"><?php echo $row["TENKM"]?>
    <?php 
    }
    ?>
</div>
            </div>
            <div class="return">
                <div class="tong">
                    <div>Tổng số lượng phòng</div>
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