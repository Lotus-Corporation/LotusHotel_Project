<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from KHACHHANG";
$result=$link->query($sql);
?>
<style>
    .layout_danhmuc{
        width: 75%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        top:10%;
        right:2%; 
        height: 1000px;
        border-radius: 10px;
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
        top: 83px;
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
        margin: 8% 10% 0 3%; 
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
    <div class="danhmuc"><h2 style="margin: 2% 0 0 2%"> Khách hàng </h2>
      <a href="index_menu_admin.php?pid=36"><button>Thêm</button></a>
<table>
    <tr>
        
        <th style="border-radius: 10px 0 0 0"> Mã Khách Hàng </th>
        <th> Họ Tên </th>
        <th> Số Điện Thoại </th>
        <th> CCCD </th>
        <th> Sửa </th>
        <th style="border-radius: 0 10px 0 0">Xóa</th>
</tr>
<?php
while ($row=$result->fetch_assoc())
{   
 ?>   

<tr>
    <td> <?php echo $row["MA_KH"];?></td>
    <td> <?php echo $row["HOTEN"];?></td>
    <td> <?php echo $row["SDT"];?></td>
    <td> <?php echo $row["CCCD"];?></td>
    <td><a href="index_menu_admin.php?pid=49&&MA_KH=<?php echo $row['MA_KH']; ?>"><img src="../img/icon/edit.png"  width="10px" height="10px"> Sửa</a></td>
    <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="control/ctrl_xoa_khachhang.php?MA_KH=<?php echo $row['MA_KH']; ?>"><img src="../img/icon/delete.png" width="10px" height="10px"> Xóa</a></td>
<tr>
<?php
 }
?>
</table>

