<link rel="stylesheet" href="./css/checkphong.css"> 

<div class="dat_phong" style="position: absolute; bottom:0%">

    <form method="post" action="index_menu.php?pid=10" >

        <div class="dat_phong1" style="left: 2%;"> 

            <?php 

                $link=new mysqli("localhost","root","","khachsan");

                $sql="select * from CHINHANH";   

                $result1=$link->query($sql);

            ?>

            <select name="chon" style="cursor: pointer;;height: 50px;text-align: center; width: 100%;font-family: 'Courier New';font-size: 18px; border:none;border-radius: 5px;"> 

                <?php

                    while($row=$result1->fetch_assoc())

                    {

                ?>

                        <option value =<?php echo $row["MA_CN"] ?>> <?php echo $row["TINHTHANH"]?> </option>

                <?php

                    }

                ?>

            </select>

        </div>

        <div class="dat_phong1" style="left: 27%">       
            <input type="date" name="ngay_di" style="cursor: pointer;;height: 50px;width:100%;font-family: 'Courier New';font-size: 18px; border:none;border-radius: 5px;" required> 
        </div>

        <div class="dat_phong1" style="left: 52%"> 
           <input type="date" name="ngay_ve" style="cursor: pointer;;height: 50px;width:100%;font-family: 'Courier New';font-size: 18px; border:none;border-radius: 5px;" required> 
        </div>

        <div class="dat_phong2" style="left: 77.3%">
           <input type="submit" value="✔ Check room"  style=" border-radius: 5px;color: rgb(255, 255, 255);  line-height: 3;width:100%;height:100%;background-color: rgb(27, 54, 73);" >
        </div>


    </form>

</div>


<script>
window.onload = function() {
    var elements = document.getElementsByTagName('INPUT');
    for (var i = 0; i < elements.length; i++) {
        elements[i].oninvalid = function(e) {
            e.target.setCustomValidity("");
            if (!e.target.validity.valid) {
                e.target.setCustomValidity("Xin vui lòng chọn ngày!");
            }
        };
        elements[i].oninput = function(e) {
            e.target.setCustomValidity("");
        };
    } 
}
</script>
