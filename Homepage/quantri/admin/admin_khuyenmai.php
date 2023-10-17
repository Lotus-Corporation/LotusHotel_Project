<?php
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from KHUYENMAI";
    $result= $link-> query($sql)
?>
<style>
  .layout_danhmuc{
        width: 75%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        top:10%;
        right:2%; 
        height:2700px;
        border-radius: 10px;
    }
    .danhmuc{
        width: 100%;
        height: 70px;
        background-color: gray;
        border-radius: 10px;
        position: absolute;
        top:0px;
    }
    button{
        padding: 15px 35px;
        position: absolute;
        right: 2%;
        top: 80px;
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
    <div class="danhmuc"><h2 style="margin: 2% 0 0 2%"> Khuyến Mãi </h2>
      <button>Thêm</button>
<table>
    <tr>
        <th style="border-radius: 10px 0 0 0">Mã KM</th>
        <th>Tên</th>
        <th>Mô tả</th>
        <th>Ngày bắt đầu</th>
        <th>Ngày kết thúc</th>
        <th>Hình Ảnh</th>
        <th> Sửa </th>
        <th style="border-radius: 0 10px 0 0">Xóa</th>
    </tr>
    <?php
        while($row=$result->fetch_assoc())
        {
    ?>
        <tr>
            <td><?php echo $row["MA_KM"]; ?></td>
            <td><?php echo $row["TENKM"]; ?></td>
            <td><?php echo $row["MOTA"]; ?></td>
            <td><?php echo $row["NGAYBATDAU"]; ?></td>
            <td><?php echo $row["NGAYKETTHUC"]; ?></td>
            <td><img src="../img/<?php echo $row["HINHANHKM"]; ?>" style="width: 400px; height:180px"></td>
            <td><a href=""><img src="../img/icon/edit.png"  width="10px" height="10px"> Sửa</a></td>
            <td><a href=""><img src="../img/icon/delete.png" width="10px" height="10px"> Xóa</a></td>
        </tr>
    <?php 
        }
    ?>
</table>