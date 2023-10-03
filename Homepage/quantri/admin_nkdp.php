<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from nhatkidatphong";
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
    <th>Mã nhật kí đặt phòng</th>
<th> Mã khách hàng </th>
<th> Ngày đặt phòng </th>
<th> Ngày trả phòng </th>
<th> Trạng thái phòng </th>
</tr>
<?php
while ($row=$result->fetch_assoc())
{
 ?>   

<tr align="center" >
    <td> <?php echo $row["MA_NKDP"];?> </td>
    <td> <?php echo $row["MA_KH"];?></td>
    <td><?php echo $row["NGAYDAT"];?></td>
    <td><?php echo $row["NGAYTRAPHONG"];?></td>
    <td><?php echo $row["TRANGTHAI"];?></td>
</tr>
<?php
 }
?>
</table>
