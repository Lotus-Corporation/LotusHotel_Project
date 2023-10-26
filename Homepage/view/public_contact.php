<html>
    <style>
    body{
        margin: 0;
        
    }   
    .layout_anh{
        width: 100%;
        height: 800px; 
        position:relative; 
        background-attachment: fixed;
        background-position: center center;
        background-image: url('https://playa-cms-assets.s3.amazonaws.com/styled/hero-jewel-punta-cana-resort-spa-couple-treatment-rooms-exterior-05.jpg/1aec8f98fbf6e55d357bd6023672360d');
        margin-bottom: 7%;
    }   
    .layout_anh_opacity{
        width: 100%;
        height: 800px; 
        position:absolute; 
        top:0;
        background-color: black; 
        opacity:0.3;
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
        margin-bottom: 4%;
        margin-left: 23%;
        border-radius: 10px;
        box-shadow: 5px 5px 5px 5px #cecece;
        background:linear-gradient(rgb(231, 245, 249),rgb(193, 233, 244));
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
        border: solid 1px #cecece;
        border-radius: 5px;
        box-shadow: 0 2px 2px 0 #cecece
    }
    button{
        padding: 15px 40px;
        border: none;
        background-color: rgb(93, 147, 166);
        cursor: pointer;
        float: right;
        margin-right: 10%;
        margin-top: 2%;
        border-radius: 5px;
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
                <textarea placeholder="Lời nhắn của bạn.." style="height:100px;width:95%; border-radius:3px;border: solid 1px #cecece;box-shadow: 0 5px 5px 0 #cecece;"></textarea>
            </div>
            <button type="submit">Gửi</button>
        </form>
    </div>

</body>
</html>