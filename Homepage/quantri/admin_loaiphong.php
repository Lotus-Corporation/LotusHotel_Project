<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from loaiphong";
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
        <th> Mã loại phòng </th>
        <th> Loại phòng </th>
        <th> Ảnh </th>
</tr>
<?php
while ($row=$result->fetch_assoc())
{
 ?>   

<tr align="center" >
    <td> <?php echo $row["MA_LOAIPHONG"];?></td>
    <td> <?php echo $row["LOAIPHONG"];?></td>
    <td> <img src="../img/loaiphong/<?php echo $row["Hinhanh"];?>" alt="" width=400px height=200px></td>
<tr>
<?php
 }
?>
</table>
