<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from PTTT";
$result=$link->query($sql);
?>


   <style>
    .layout_danhmuc{
        margin: 7% 6% 0 5%; 
        border-radius: 7px;
        width: 65%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        right:3%; 
        height: 330px;
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
        margin: 9% 10% 0 3%; 
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
    <div class="danhmuc"><h2 style="margin: 2% 0 0 2%"> Phương thức thanh toán</h2>
      <a href="index_menu_admin.php?pid=39"><button>Thêm</button> </a>
      
<table>
         <tr>
    <th style="border-radius: 10px 0 0 0" >Mã phương thức thanh toán</th>
    <th> Phương thức</th>
    <th> Sửa </th>
    <th style="border-radius: 0 10px 0 0">Xóa</th>
         </tr>
   <?php
while ($row=$result->fetch_assoc())
{
   ?>   

<tr align="center" >
    <td> <?php echo $row["MA_PTTT"];?> </td>
    <td> <?php echo $row["LOAIPTTT"];?></td>
    <td><a href="index_menu_admin.php?pid=57&&MA_PTTT=<?php echo $row['MA_PTTT']; ?>"><img src="../img/icon/edit.png"  width="10px" height="10px"> Sửa</a></td>
    <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="control/ctrl_xoa_pttt.php?ma_pttt=<?php echo $row['MA_PTTT']; ?>"><img src="../img/icon/delete.png" width="10px" height="10px"> Xóa</a></td>
</tr>
     <?php
 }
      ?>
</table>
</div>
</div>




