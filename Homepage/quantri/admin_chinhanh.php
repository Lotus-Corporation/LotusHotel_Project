<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from chinhanh";
    $result=$link->query($sql);
?>
<style>
    th, td{
        border: 2px solid gray;
        text-align: center;
        padding: 10px
    }
    table{ width: 100%}
</style>
<table>
    <tr>
        <th>Mã Chi Nhánh</th>
        <th>Địa chỉ</th>
        <th>SĐT</th>
        <th>Mã Quản Lí</th>
        <th>Hình Ảnh</th>
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
                <td><img src="../img/<?php echo $row["HINHANH"]; ?>" style="width: 300px; height: 300px;"></td>
            </tr>
    <?php
        }
    ?>
</table>