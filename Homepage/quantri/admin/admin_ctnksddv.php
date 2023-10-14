<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from chitiet_nksddv";
    $result=$link->query($sql);
?>
<style>
    .layout_danhmuc{
        width: 60%; 
        position: absolute; 
        background-color: rgb(253, 245, 233);
        top:10%;
        right:8%; 
        height: 700px;
        top:100px;
        border-radius: 10px;
    }
    .danhmuc{
        width: 100%;
        height: 70px;
        background-color: gray;
        border-radius: 10px;
        position: absolute;
        top:0px;
    }
    button{
        padding: 15px 35px;
        position: absolute;
        right: 2%;
        top: 83px;
        border: none;
        background-color: rgb(210, 168, 84);
        border-radius: 10px;
        cursor: pointer;
    }
    button:hover{
        background-color: rgb(161, 110, 7);
    }
    table{ 
        width: 95%; 
        margin: 9% 10% 0 3%; 
        border-radius: 10px;
        border-spacing: 0;
        border-collapse: separate; 
        top:10px;
    }
   
    th{
       background-color: gray;
       padding: 10px;
       border-radius: 7px;

    }

    td{
        background-color:antiquewhite;
        border-style:outset;
        padding: 10px;
        border-radius: 7px;

    }
   
    a{
        text-decoration: none;
        color: black;
    }
    a:hover{
        color: brown;
    }
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