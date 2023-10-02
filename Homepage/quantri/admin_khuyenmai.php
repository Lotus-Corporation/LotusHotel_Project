<?php
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from khuyenmai";
    $result= $link-> query($sql)
?>
<style>
    table{width:100%}
    th,td{
        border: 1px solid gray;
        padding: 10px;
        text-align: center;
    }
</style>
<table>
    <tr>
        <th>Mã KM</th>
        <th>Tên</th>
        <th>Mô tả</th>
        <th>Ngày bắt đầu</th>
        <th>Ngày kết thúc</th>
        <th>Đối tượng áp dụng</th>
        <th>Mã Loại Phòng</th>
        <th>Hình Ảnh</th>
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
            <td><?php echo $row["DOITUONGAPDUNG"]; ?></td>
            <td><?php echo $row["MA_LOAIPHONG"];?></td>
            <td><img src="../images/<?php echo $row["HINHANHKM"]; ?>" style="width: 400px; height:180px"></td>
        </tr>
    <?php 
        }
    ?>
</table>