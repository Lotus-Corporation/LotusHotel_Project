<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from nhatkidatphong";
$result=$link->query($sql);
?>

<style>
.layout_danhmuc{
    width:70%;
    background-color:rgb(253, 245, 233);
    height: 1000px;
    border-start-start-radius: 80px 80px;
    position: absolute; 
    top:20px;
    right:15%;
}

  
.danhmuc{
    width:100%;
    height:65px;
    background-color:grey;
    text-align:center;
    border-start-start-radius: 80px 80px;
    border-top: 0.2rem solid;
    position: absolute; 

}
input {
       width: 40%;
       height: 40px;
       font-size: 15px;
       margin-top: 25px;
       border: solid 1px ;
       border-radius:10px;
       
   }
 label{ 
       background-color: rgb(250, 204, 148);
       padding:15px;
       border-radius: 10px;
       
   }
   form{
        width: 90%; 
        margin: 5% 0 0 10%;
    }
    form >div{
        margin: 0 10% 6% 20%;
        background-color:rgb(251, 231, 206);
        font-size: 18px;
        padding: 0 35px 25px 35px;
        
        width: 40%;
        border-radius: 10px;
    }
    


</style>

<div class="layout_danhmuc">
    <div class="danhmuc">
        <h2>Thêm nhật kí đặt phòng</h2>
        <form method="post" action="control/ctrl_them_nkdp.php">
            </br>

    <div>
    <div>
 <label>Mã nhật kí đặt phòng:</label></br>
 <input type="text" value="" name="MA_NKDP"  
  placeholder="Please enter your booking log code"> 
</div>
    </div>

<div>
 <label >Mã khách hàng:</label></br>
 <input type="text" value="" name="MA_KH"  
 placeholder="Please enter your customer code">
</div>




<div >
 <label text-align:center style="width:40%">Ngày đặt phòng</label></br>
 <input type="date" name="NGAYDAT">
</div>



<div >
 <label text-align:center>Ngày trả phòng</label></br>
 <input type="date" name="NGAYTRAPHONG">
</div>

 

<div class="date-input">
 <label>Trạng thái phòng</label></br>
 <input type="text" name="TRANGTHAI"
  placeholder="Status room">
</div>
<button type="submit">Lưu</button>
</form>
           
</div>
    </div>

