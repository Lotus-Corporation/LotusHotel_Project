<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from dichvu";
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
        <th>Mã dịch vụ</th>
        <th>Tên dịch vụ</th>
        <th>Đơn giá dịch vụ</th>
        <th>Đơn vị tính</th>
        <th>Hình Ảnh</th>
    </tr>

    <?php
        while($row=$result->fetch_assoc())
        {
    ?>
            <tr>
                <td><?php echo $row["MA_DV"]; ?></td>
                <td><?php echo $row["TENDV"]; ?></td>
                <td><?php echo $row["DONGIADV"]; ?></td>
                <td><?php echo $row["DONVITINH"]; ?></td>
                <td><img src="../img/dichvu/<?php echo $row["HINHANHDV"]; ?>" style="width: 300px; height: 280px;"></td>
            </tr>
    <?php
        }
    ?>
</table>