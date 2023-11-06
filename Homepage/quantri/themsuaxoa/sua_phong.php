<?php 
    $ma_phong = $_GET['MA_PHONG'];
    $ma_lp = $_GET['ma_lp'];
    $ma_cn = $_GET['ma_cn'];
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from PHONG where MA_PHONG='$ma_phong'";
    $sql_lp="select* from LOAIPHONG ";
    $sql_macn="select* from CHINHANH ";
    
    $result=$link->query($sql);
    $result_lp=$link->query($sql_lp);
    $result_macn=$link->query($sql_macn);
    $row=$result->fetch_assoc();

    
?>
<style>
    .layout_danhmuc{
        width: 70%; 
        position: absolute; 
        top: 10%;
        right: 5%; 
        background-color: rgb(253, 245, 233);
        height: 1000px
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
   <div class="danhmuc"><h2 style="margin :1%0%02%">Sửa phòng</h2>
      <form method="post" enctype="multipart/form-data" action="control/ctrl_sua_phong.php">
         <div>
            <label>Mã phòng</label><br>
            <input type="text" name="ma_phong" value="<?php echo $row['MA_PHONG']; ?>" readonly>
         </div>
         



          <div>
                <label>Mã loại phòng</label><br>
                <select name="MA_LOAIPHONG">
                    <?php 
                    while($row_lp=$result_lp->fetch_assoc()){
                        $selected = '';
                        if ($row_lp["MA_LOAIPHONG"] == $ma_lp) {
                            $selected = 'selected="selected"';
                        }
                    ?>
                    <option value=<?php echo $row_lp["MA_LOAIPHONG"]?> <?php echo $selected ?>><?php echo $row_lp["MA_LOAIPHONG"]?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>



         <div>
            <label>Tên phòng</label><br>
            <input type="text" name="tenphong" value="<?php echo $row['TENPHONG']; ?>">
         </div>
         <div>
            <label>Đơn giá phòng</label><br>
            <input type="text" name="dongiaphong" value="<?php echo $row['DONGIAPHONG']; ?>">
         </div>




        
         <div>
                <label>Mã chi nhánh</label><br>
                <select name="ma_cn">
                    <?php 
                    while($row_macn=$result_macn->fetch_assoc()){
                        $selected = '';
                        if ($row_macn["MA_CN"] == $ma_cn) {
                            $selected = 'selected="selected"';
                        }
                    ?>
                    <option value=<?php echo $row_macn["MA_CN"]?> <?php echo $selected ?>><?php echo $row_macn["MA_CN"]?></option>
                    <?php 
                    }
                    ?>
                </select>
            </div>


         <div>
            <label>Số người tối đa</label><br>
            <input type="text" name="songuoitoida" value="<?php echo $row['SONGUOITOIDA']; ?>">
         </div>

         <div>
            <label>Số giường</label><br>
            <input type="text" name="sogiuong" value="<?php echo $row['DONGIAPHONG']; ?>">
         </div>

         <div>
         <label>Hình Ảnh</label><br> 
                <input style="border:none" type="file" id="imageUpload" name="hinhanh">
                <img id="imagePreview" src="../img/phong/<?php echo $row['ANHPHONG']?>" width="200px" height="200px">
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
