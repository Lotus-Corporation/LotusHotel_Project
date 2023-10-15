<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from PHONG";
$result=$link->query($sql);
?>

<style>
    .layout_danhmuc{
        width: 76%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        right:2%; 
        height: 2000px;
        top:65px;
    }
    .danhmuc{
        width: 100%;
        height: 70px;
        background-color: gray;
        border-radius: 10px 10px 0 0;
        position: absolute;
        top:2px;
    }
    button{
        padding: 15px 35px;
        position: absolute;
        right: 2%;
        top: 82px;
        border: none;
        background-color: rgb(210, 168, 84);
        border-radius: 10px;
        cursor: pointer;
    }
    button:hover{
        background-color: rgb(161, 110, 7);
    }
    table{ 
        width: 95%; 
        margin: 10% 10% 0 3%; 
        border-radius: 10px;
        border-spacing: 0;
        border-collapse: separate; 
        border-radius: 7px;

    }
   
    th{
       background-color: gray;
       padding: 10px;

    }

    td{
        background-color:antiquewhite;
        border-style:outset;
        padding: 10px;
        border-radius: 7px;

    }
   
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: brown;
    }
   
</style>

  <div class="layout_danhmuc"> 
    <div class="danhmuc"><h2 style="margin: 1% 0 0 2%"> Danh Sách Phòng </h2>
      <button>Thêm</button>

      <table>
         <tr>
    <th style="border-radius: 10px 0 0 0" >Mã Phòng</th>
    <th> Mã Loại Phòng</th>
    <th> Đơn Giá Phòng </th>
    <th> Mã Chi Nhánh </th>
    <th> Số Người Tối Đa </th>
    <th> Hình ảnh </th>
    <th> Sửa </th>
    <th style="border-radius: 0 10px 0 0">Xóa</th>
         </tr>
   <?php
while ($row=$result->fetch_assoc())
{
   ?>   

<tr align="center" >
    <td> <?php echo $row["MA_PHONG"];?> </td>
    <td> <?php echo $row["MA_LOAIPHONG"];?></td>
    <td> <?php echo $row["DONGIAPHONG"];?></td>
    <td> <?php echo $row["MA_CN"];?></td>
    <td> <?php echo $row["SONGUOITOIDA"];?></td>
    <td><img src="../img/<?php echo $row["ANHPHONG"]; ?>" style="width: 100px; height: 100px;"></td>
    <td><a href=""><img src="../img/icon/edit.png"  width="10px" height="10px"> Sửa</a></td>
    <td><a href=""><img src="../img/icon/delete.png" width="10px" height="10px"> Xóa</a></td>
</tr>
     <?php
 }
      ?>
</table>
</div>
</div>