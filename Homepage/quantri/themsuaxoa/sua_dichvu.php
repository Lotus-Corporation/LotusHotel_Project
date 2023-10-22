<?php 
    $ma_dv = $_GET['MA_DV'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from DICHVU where MA_DV='$ma_dv'";
    $result=$link->query($sql);
    $row=$result->fetch_assoc();
?>
<style>
    .layout_danhmuc{
        width: 70%; 
        position: absolute; 
        top: 10%;
        right: 5%; 
        background-color: rgb(253, 245, 233);
        height: 80%
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
    }
    form >div{
        margin: 0 7.5% 5% 0%;
        background-color:rgb(251, 231, 206);
        font-size: 17px;
        padding: 0 35px 25px 35px;
        float: left;
        width: 35%;
        border-radius: 10px;
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
        width:60%;
        height:30px;
        font-size :15px;
        margin-top :25px;
        border :solid2px ;
    }
    button{
       padding :15px 40px;
       border :none;
       background-color :rgb(234,159,85);
       border-radius :10px;
       cursor :pointer;
       float:right;
       margin-right :18%;
   }
   button:hover{
      background-color :rgb(161,110,7);
   }
</style>
<div class="layout_danhmuc"> 
   <div class="danhmuc"><h2 style="margin :1% 0 0 2%">Sửa dịch vụ</h2>
      <form method="post" enctype="multipart/form-data" action="control/ctrl_sua_dichvu.php">
         <div>
            <label>Mã dịch vụ</label><br>
            <input type="text" name="ma_dv" value="<?php echo $row['MA_DV']; ?>" readonly>
         </div>
         <div>
            <label>Tên dịch vụ</label><br>
            <input type="text" name="ten_dv" value="<?php echo $row['TENDV']; ?>">
         </div>
         <div>
            <label>Đơn giá dịch vụ</label><br>
            <input type="text" name="dongia" value="<?php echo $row['DONGIADV']; ?>">
         </div>
         <div>
            <label>Đơn vị tính</label><br>
            <input type="text" name="donvitinh" value="<?php echo $row['DONVITINH']; ?>">
         </div>
         <div>
         <label>Hình Ảnh</label><br> 
                <input style="border:none" type="file" id="imageUpload" name="hinhanh">
                <img id="imagePreview" src="../img/dichvu/<?php echo $row['HINHANHDV']?>" width="200px" height="200px">
            </div>

            <script>
                document.getElementById("imageUpload").addEventListener("change", function(e) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById("imagePreview").src = e.target.result;
                    }
                    reader.readAsDataURL(this.files[0]);
            }   );
            </script>
         <button type="submit">Lưu</button>
      </form>
   </div>
</div>
