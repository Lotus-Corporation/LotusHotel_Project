<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from CHITIET_NKSDDV";
    $result=$link->query($sql);
?>
<style>
    .layout_danhmuc{
        width: 75%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        top:10%;
        right:2%; 
        height: 1300px
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
    <div class="danhmuc"><h2 style="margin: 2% 0 0 2%"> Chi tiết Nhật Kí Sử Dụng Dịch Vụ </h2>
      <a href="index_menu_admin.php?pid=32"><button>Thêm</button></a>
<table>
    <tr>
        <th style="border-radius: 10px 0 0 0">Mã chi tiết NKSD dịch vụ</th>
        <th>Mã NKSD dịch vụ</th>
        <th>Mã dịch vụ</th>
        <th>Tên dịch vụ</th>
        <th>Số lượng</th>
        <th>Đơn giá </th>
        <th> Sửa </th>
        <th style="border-radius: 0 10px 0 0">Xóa</th>
    </tr>

    <?php
        while($row=$result->fetch_assoc())
        {
    ?>
            <tr align="center" >
                <td><?php echo $row["MA_CT_NKSDDV"]; ?></td>
                <td><?php echo $row["MA_NKSD_DICHVU"]; ?></td>
                <td><?php echo $row["MA_DV"]; ?></td>
                <td><?php echo $row["TENDV"]; ?></td>
                <td><?php echo $row["SOLUONG"]; ?></td>
                <td><?php echo $row["DONGIADV"]; ?></td>
                <td><a href="index_menu_admin.php?pid=46&&MA_CT_NKSDDV=<?php echo $row['MA_CT_NKSDDV']; ?>"><img src="../img/icon/edit.png"  width="10px" height="10px"> Sửa</a></td>
                <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="control/ctrl_xoa_ctnksddv.php?MA_CT_NKSDDV=<?php echo $row['MA_CT_NKSDDV']; ?>"><img src="../img/icon/delete.png" width="10px" height="10px">Xóa</a></td>
            </tr>
    <?php
        }
    ?>
</table>