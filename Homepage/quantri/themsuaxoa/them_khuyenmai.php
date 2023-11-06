<style>
    .layout_danhmuc{
        width: 70%; 
        position: absolute; 
        top: 10%;
        right: 5%; 
        background-color: rgb(253, 245, 233);
        height: 760px
    }
    .danhmuc{
        width: 100%;
        height: 50px;
        background-color: darkgray;
        border-radius: 10px 10px 0 0;
        position: absolute;
        top:0;
    }
    form{
        width: 90%; 
        margin: 5% 0 0 10%; 
        display: flex;
        flex-wrap: wrap;
    }
    form >div{
        margin: 0 5% 7.5% 0%;
        background-color:rgb(251, 231, 206);
        font-size: 17px;
        padding: 0 35px 25px 35px;
        float: left;
        border-radius: 10px;
        flex-basis: 35%;
    }
    input {
        width: 70%;
        height: 30px;
        font-size: 15px;
        margin-top: 25px;
        border: solid 2px ;
    }
    label{
        background-color: rgb(250, 204, 148);
        padding:13px;
        border-radius: 10px;
    }
    div >select{
        width: 60%;
        height: 30px;
        font-size: 15px;
        margin-top: 25px;
        border: solid 2px
    }
    button{
        padding: 15px 40px;
        border: none;
        background-color: rgb(234, 159, 85);
        border-radius: 10px;
        cursor: pointer;
        float: right;
        margin-right: 18%;
        width: 10%;
        height: 10%;
       
    }
    button:hover{
        background-color: rgb(161, 110, 7);
    }
</style>
<div class="layout_danhmuc">
    <div class="danhmuc"><h2 style="margin: 1% 0 0 2%"> Thêm  khuyến mãi </h2>
        <form method="post" enctype="multipart/form-data" action="control/ctrl_them_khuyenmai.php">
            <div>
                <label>Mã khuyến mãi</label><br>
                <input type="text" name="ma_km">
            </div>
            <div>
            <label>Tên khuyến mãi</label><br>
                <input type="text" name="ten_km">
            </div>
            <div>
                <label>Ngày bắt đầu</label><br>
                <input type="date" name="ngaybatdau">
            </div>
            <div>
            <label>Ngày kết thúc</label><br>
                <input type="date" name="ngayketthuc">
            </div>
            <div>
            <label>Mô tả</label><br>
                <input type="text" name="mota">
            </div>
            <div>
                <label>Hình Ảnh</label><br> 
                <input style="border:none" type="file" name="hinhanh">
            </div>
            <button type="submit">Lưu</button>
        </form>
    </div>
</div>