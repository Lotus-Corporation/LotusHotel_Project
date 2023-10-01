<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from loaiphong";
$result=$link->query($sql);
?>
<table  border="1" width= "650px" height= "650px"; align="center">
    <tr>
        <th> Mã loại phòng </th>
        <th> Loại phòng </th>
</tr>
<?php
while ($row=$result->fetch_assoc())
{
 ?>   

<tr align="center" >
    <td> <?php echo $row["MA_LOAIPHONG"];?></td>
    <td> <?php echo $row["LOAIPHONG"];?></td>
    <td> <img src="../img/<?php echo $row["Hinhanh"];?>" alt="" width=200px height=100px></td>
<tr>
<?php
 }
?>
</table>
