<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from nhatkidatphong";
$result=$link->query($sql);
?>


   <style>
    .layout_danhmuc{
        width: 80%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        top:10%;
        right:0%; 
        height: 1100px;
        top:65px;
    }
    .danhmuc{
        width: 100%;
        height: 70px;
        background-color: gray;
        border-radius: 10px 10px 0 0;
        position: absolute;
        top:0px;
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
        margin: 7% 10% 0 3%; 
        border-radius: 10px;
        border-spacing: 0;
        border-collapse: separate; 
       
        top:10px;
    }
   
    th{
       background-color: gray;
       padding: 10px
    }

    td{
        background-color:antiquewhite;
        border-style:outset;
        padding: 10px
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
    <div class="danhmuc"><h2 style="margin: 1% 0 0 2%"> Danh sách nhật kí đặt phòng</h2>
      <button>Thêm</button>
      
<table>
         <tr>
    <th style="border-radius: 10px 0 0 0" >Mã nhật kí đặt phòng</th>
    <th> Mã khách hàng </th>
    <th> Ngày đặt phòng </th>
    <th> Ngày trả phòng </th>
    <th> Trạng thái phòng </th>
    <th>Sửa</th>
    <th style="border-radius: 0 10px 0 0">Xóa</th>
         </tr>
   <?php
while ($row=$result->fetch_assoc())
{
   ?>   

<tr align="center" >
    <td> <?php echo $row["MA_NKDP"];?> </td>
    <td> <?php echo $row["MA_KH"];?></td>
    <td><?php echo $row["NGAYDAT"];?></td>
    <td><?php echo $row["NGAYTRAPHONG"];?></td>
    <td><?php echo $row["TRANGTHAI"];?></td>
    <td><a href=""><img src="../img/icon/edit.png"  width="10px" height="10px"> Sửa</a></td>
    <td><a href=""><img src="../img/icon/delete.png" width="10px" height="10px"> Xóa</a></td>
</tr>
     <?php
 }
      ?>
</table>
</div>
</div>




