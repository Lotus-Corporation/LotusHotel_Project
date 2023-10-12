<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from chitiet_nksddv";
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
        <th>Mã chi tiết NKSD dịch vụ</th>
        <th>Mã NKSD dịch vụh</th>
        <th>Mã dịch vụ</th>
        <th>Số lượng</th>
    </tr>

    <?php
        while($row=$result->fetch_assoc())
        {
    ?>
            <tr>
                <td><?php echo $row["MA_CT_NKSDDV"]; ?></td>
                <td><?php echo $row["MA_NKSD_DICHVU"]; ?></td>
                <td><?php echo $row["MA_DV"]; ?></td>
                <td><?php echo $row["SOLUONG"]; ?></td>
            </tr>
    <?php
        }
    ?>
</table>