<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from chinhanh";
    $result=$link->query($sql);
?>
<style>
    .layout_danhmuc{
        width: 75%; 
        position: absolute; 
        top: 10%;
        right: 2%; 
        background-color: rgb(253, 245, 233);
        height: 1410px;;
    }
    .danhmuc{
        width: 100%;
        height: 50px;
        background-color: darkgray;
        border-radius: 10px 10px 0 0;
        position: absolute;
        top:0;
    }
    button{
        padding: 15px 40px;
        position: absolute;
        right: 2%;
        top: 60px;
        border: none;
        background-color: rgb(210, 168, 84);
        border-radius: 10px;
        cursor: pointer;
    }
    table{ 
        width: 98%; 
        margin: 7% 1% 0 1%; 
        border-radius: 10px;
        border-spacing: 0;
        border-collapse: separate; 
    }
    th, td{
        text-align: center;
        padding: 10px
    }
    th{
       background-color: darkgray;
       padding:14.5px
    }
    td{
        background-color:antiquewhite;
    }
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: brown;
    }
    button:hover{
        background-color: rgb(161, 110, 7);
    }
</style>
<div class="layout_danhmuc">
    <div class="danhmuc"><h2 style="margin: 1% 0 0 2%"> Danh sách chi nhánh</h2>
    <button>Thêm</button>
        <table>
            <tr>
                <th style="border-radius: 10px 0 0 0">Mã Chi Nhánh</th>
                <th>Địa chỉ</th>
                <th>SĐT</th>
                <th>Mã Quản Lí</th>
                <th>Hình Ảnh</th>
                <th>Sửa</th>
                <th style="border-radius: 0 10px 0 0">Xóa</th>
            </tr>

            <?php
                while($row=$result->fetch_assoc())
                {
            ?>
                    <tr>
                        <td><?php echo $row["MA_CN"]; ?></td>
                        <td><?php echo $row["DIACHI"]; ?></td>
                        <td><?php echo $row["SDT"]; ?></td>
                        <td><?php echo $row["MA_NV"]; ?></td>
                        <td><img src="../img/<?php echo $row["HINHANH"]; ?>" style="width: 100px; height: 100px;"></td>
                        <td><a href=""><img src="../img/icon/edit.png" width="10px" height="10px"> Sửa</a></td>
                        <td><a href=""><img src="../img/icon/delete.png" width="10px" height="10px"> Xóa</a></td>
                    </tr>
            <?php
                }
            ?>
        </table>
    </div>
</div>