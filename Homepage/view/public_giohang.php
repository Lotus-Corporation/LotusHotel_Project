<!-- CHUA THAO TAC DUOC GI -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOTUS HOTEL</title>
    <link rel="icon" href="../img/anhphongnoibat/logo.png" type = "image/x-icon" > 
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
    <div class="khungngoai">
        <div class="listsp">
            <a href="../index_menu.php"><i class="fa fa-reply"> keep searching room </i></a>
            <h1>List Product in Cart</h1>
            <div>
                <div class="sanpham">
                    <img src="../img/anhphongnoibat/1.jpg" style="border-radius:20px;">
                        <div class="name">SUITE</div>
                        <div>2000VND</div>
                    <div class="soluong">
                      <button class="decrease">-</button>
                      <input type="number" value="5" min="1" max="99">
                      <button class="increase">+</button>
                    </div>
                    <div class="tonggia">200000VND</div>
                    <i class="fa fa-times"></i>
                </div>
            </div>
        </div>

        <div class="right">
            <h1>Checkout</h1>
            <div class="thongtin">
                <div class="group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name">
                </div>
    
                <div class="group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" id="phone">
                </div>
    
                <div class="group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address">
                </div>
    
                <div class="group">
                    <label for="country">Country</label>
                    <select name="country" id="country">
                        <option value="">Choose..</option>
                        <option value="">...</option>
                    </select>
                </div>
    
                <div class="group">
                    <label for="city">City</label>
                    <select name="city" id="city">
                        <option value="">Choose..</option>
                        <option value="">...</option>
                    </select>
                </div>
            </div>
            <div class="return">
                <div class="tong">
                    <div>Total Quantity</div>
                    <div>1</div>
                </div>
                <div class="tong">
                    <div>Total Price</div>
                    <div>1000VND</div>
                </div>
            </div>
            <button class="button">CHECKOUT</button>
            </div>
    </div>

    <script>
document.querySelectorAll('.sanpham .soluong').forEach(function(soluong) {
    var decrease = soluong.querySelector('.decrease');
    var increase = soluong.querySelector('.increase');
    var input = soluong.querySelector('input');

    decrease.addEventListener('click', function() {
        if (input.value > 1) {
            input.value--;
        }
    });

    increase.addEventListener('click', function() {
        if (input.value < 99) {
            input.value++;
        }
    });
});

</script>
</body>
</html>