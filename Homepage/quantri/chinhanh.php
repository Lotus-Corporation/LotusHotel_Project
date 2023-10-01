<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from chinhanh";
$result=$link->query($sql);
?>
<table  border="1" width= "650px" height= "650px"; align="center">
    <tr>
        <th> Mã chi nhánh </th>
        <th> Địa chỉ </th>
        <th> SDT </th>
        <th> NV quản lý </th>
</tr>
<?php
while ($row=$result->fetch_assoc())
{
 ?>   

<tr>
    <td> <?php echo $row["MA_CN"];?></td>
    <td> <?php echo $row["DIACHI"];?></td>
    <td> <?php echo $row["SDT"];?></td>
    <td> <?php echo $row["MA_NV"];?></td>
<tr>
<?php
 }
?>
</table>
