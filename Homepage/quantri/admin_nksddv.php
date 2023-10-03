<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from nksd_dichvu";
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
        <th>Mã NKSD dịch vụ</th>
        <th>Mã khách hàng</th>
    </tr>

    <?php
        while($row=$result->fetch_assoc())
        {
    ?>
            <tr>
                <td><?php echo $row["MA_NKSD_DICHVU"]; ?></td>
                <td><?php echo $row["MA_KH"]; ?></td>
            </tr>
    <?php
        }
    ?>
</table>