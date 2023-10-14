<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from CHITIETKHUYENMAI";
$result=$link->query($sql);
?>

<style>
    .layout_danhmuc{
        width: 78%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        right:1%; 
        height: 1050px;
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
    <div class="danhmuc"><h2 style="margin: 1% 0 0 2%"> Chi Tiết Khuyến Mãi </h2>
      <button>Thêm</button>

      <table>
         <tr>
    <th style="border-radius: 10px 0 0 0" >Mã Khuyến Mãi</th>
    <th> Mã Nhật Kí Đặt Phòng</th>
    <th> Giá Trị </th>
    <th> Mã Dịch Vụ </th>
    <th> Sửa </th>
    <th style="border-radius: 0 10px 0 0">Xóa</th>
         </tr>
   <?php
while ($row=$result->fetch_assoc())
{
   ?>   

<tr align="center" >
    <td> <?php echo $row["MA_KM"];?> </td>
    <td> <?php echo $row["MA_CTNKDP"];?></td>
    <td> <?php echo $row["GIATRI"];?></td>
    <td> <?php echo $row["MA_DV"];?></td>
    <td><a href=""><img src="../img/icon/edit.png"  width="10px" height="10px"> Sửa</a></td>
    <td><a href=""><img src="../img/icon/delete.png" width="10px" height="10px"> Xóa</a></td>
</tr>
     <?php
 }
      ?>
</table>
</div>
</div>