<?php 

    $link=new mysqli("localhost","root","","khachsan");
    $sql="select * from CHINHANH";   
    $result=$link->query($sql);
?>
<form method="post" action="" >
    <select name="chon"  style="cursor: pointer;;height: 50px;text-align: center; width: 100%;font-family: 'Courier New';font-size: 18px; border:none;border-radius: 5px;"> 
        <?php
            while($row=$result->fetch_assoc())
            {
        ?>
                <option value =<?php echo $row["MA_CN"] ?>> <?php echo $row["TINHTHANH"]?> </option>
        <?php
            }
        ?>
    </select>

</form>

