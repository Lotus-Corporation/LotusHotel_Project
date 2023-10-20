<html>
    <style>
    body{
        margin: 0
    }   
    .layout_anh{
        width: 100%;
        height: 600px; 
        position:relative; 
        
        margin-bottom: 7%;
    }   
    .layout_anh_opacity{
        width: 100%;
        height: 600px; 
        position:absolute; 
        top:0;
        background-color: black; 
        opacity:0.5;
    }
    .loigoi{
        text-align: center; 
        position:absolute; 
        top:40%;
        left:42%;
        color: #fff;
    }
    .danhmuc{
        animation-name: chuyendong;
        animation-duration: 5s;
        font-size: 20px;
        margin-left: 23%;
        border: 1px solid gray;
        border-radius: 7px;
        background-color: rgb(245, 252, 255);
        width: 50%;
        height: 450px;
        padding: 40px;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    @keyframes chuyendong{
        0%{
            margin-top: 10%;
        }
        
    }

    form > div{
        float: left;
        margin: 2%;
        width: 45%;
    }
    input{
        width:100%;
        height: 30px;
        border: solid 0.01px gray;
        border-radius: 3px;
    }
    button{
        padding: 15px 40px;
        border: none;
        background-color: rgb(193, 233, 244);
        cursor: pointer;
        float: right;
        margin-right: 10%;
        margin-top: 2%;
    }
    button:hover{
        background-color: rgb(5, 53, 107);
        color: white;
    }
    label{
        margin-left: 20px;
    }
</style>
<body>
<div class="layout_anh">
    <img src="https://laseta.bithemer.com/assets/img/background/bg6.jpg"style="height: 600px; width:100%">
    <div class="layout_anh_opacity"></div>
    <div class="loigoi">
        <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:20px; margin-bottom:5%">LOTUS HOTEL</div>
        <div style="font-size:45px">CONTACT US</div>
    </div>
</div>

    <div class="danhmuc"><h2 style="margin: 1% 0 0 2%"> SEND AN EMAIL</h2>
        <form method="post" action="">
            <div>
                <label>Họ</label><br>
                <input type="text">
            </div>
            <div>
                <label>Tên</label><br>
                <input type="text">
            </div>
            <div>
                <label>Email</label><br>
                <input type="text">
            </div>
            <div>
                <label>SĐT</label><br>
                <input type="text">
            </div>
            <div style="width:100%">
                <label>Lời nhắn</label><br>
                <textarea placeholder="Lời nhắn của bạn.." style="height:100px;width:95%; border-radius:3px"></textarea>
            </div>
            <button type="submit">Gửi</button>
        </form>
    </div>

</body>
</html>