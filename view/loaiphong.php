<?php 
$link=new mysqli("localhost", "root","","khachsan");
$sql="select * from loaiphong";
$result=$link->query($sql);
while ($row=$result)
?>
<div id="loaiphong">
    <br>
    <span><b> <?php 