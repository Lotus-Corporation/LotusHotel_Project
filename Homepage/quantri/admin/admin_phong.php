<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from PHONG";
$result=$link->query($sql);
?>

<style>
     .layout_danhmuc{
        width: 75%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        right:2%; 
        height: 6600px;
        top: 10%
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
        margin: 8% 10% 0 3%; 
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
    <div class="danhmuc"><h2 style="margin: 2% 0 0 2%"> Danh Sách Phòng </h2>
      <a href="index_menu_admin.php?pid=27"><button>Thêm</button></a>

      <table>
         <tr>
    <th style="border-radius: 10px 0 0 0" >Mã Phòng</th>
    <th> Mã Loại Phòng</th>
    <th>Tên Phòng</th>
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
    <td> <?php echo $row["TENPHONG"];?></td>
    <td> <?php echo $row["DONGIAPHONG"];?></td>
    <td> <?php echo $row["MA_CN"];?></td>
    <td> <?php echo $row["SONGUOITOIDA"];?></td>
    <td><img src="../img/phong/<?php echo $row["ANHPHONG"]; ?>" style="width: 200px"></td>
    <td><a href="index_menu_admin.php?pid=56&&MA_PHONG=<?php echo $row['MA_PHONG']?>&&ma_lp=<?php echo $row['MA_LOAIPHONG'] ?>; ?>"><img src="../img/icon/edit.png"  width="10px" height="10px"> Sửa</a></td>
    <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="control/ctrl_xoa_phong.php?ma_phong=<?php echo $row['MA_PHONG']; ?>"><img src="../img/icon/delete.png" width="10px" height="10px"> Xóa</a></td>
</tr>
     <?php
 }
      ?>
</table>
</div>
</div>