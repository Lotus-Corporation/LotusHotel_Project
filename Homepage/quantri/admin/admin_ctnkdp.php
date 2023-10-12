<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from chitietnhatkidatphong";
$result=$link->query($sql);
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
<th>Mã chi tiết nhật kí đặt phòng</th>
<th> Mã nhật kí đặt phòng </th>
<th> Mã phòng </th>
<th> Đơn giá phòng </th>
</tr>
<?php
while ($row=$result->fetch_assoc())
{
 ?>   

<tr align="center" >
    <td> <?php echo $row["MA_CTNKDP"];?> </td>
    <td> <?php echo $row["MA_NKDP"];?></td>
    <td><?php echo $row["MA_PHONG"];?></td>
    <td><?php echo $row["DONGIAPHONG"];?></td>
</tr>
<?php
 }
?>
</table>