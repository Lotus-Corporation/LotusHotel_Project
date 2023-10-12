<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from LOAIPHONG";
$result=$link->query($sql);
while ($row=$result)
?>
<div id="LOAIPHONG">
    <br>
    <span><b> <?php 