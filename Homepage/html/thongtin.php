<link rel="stylesheet" href="css/thongtin.css"> 
<div class="loi_goi">
  <div style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size:17px;margin-top:2%">HÃY BẮT ĐẦU TRẢI NGHIỆM</div>
  <div style="font-size:40px">LOTUS</div>
  </div>
<div class="layout_thong_tin">
      <div class="dat_phong">
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

        <div class="thong_tin" style="margin: 5% 2% 0 8%">
          <h1>LOTUS</h1>
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
      
        <div class="thong_tin" style="margin: 5% 2% 0 0">
          <h1>Lien He</h1>
          0316546156 <br>
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
        <div class="thong_tin" style="margin: 5% 2% 0 0">
          <h1>Quick Links</h1>
          klrh uiahvna ;onakwe jhhF HVMNLK AWkesjrghrj vknak vknak jnk;jna; knjn
          lkfqnlwk lawnli lksjf vknak jnk;jna; knjn lkfqnlwk lawnli lksjf
          jnk;jna; knjn lkfqnlwk lawnli lksjfalw liawjj roanwnr onoiEH[ OISH;I
        </div>
        <div class="thong_tin" style="margin: 5% 0 0 0">
          <h1>Get The Apps</h1><br>
          <img src="https://laseta.bithemer.com/assets/img/icons/i1.svg">
          <img src="https://laseta.bithemer.com/assets/img/icons/i2.svg">
          <br><br><h1>Connect Social</h1>
          <img src="https://img.icons8.com/?size=256&id=uLWV5A9vXIPu&format=png" style="width: 30px; height:30px">
          <img src="https://img.icons8.com/?size=256&id=Xy10Jcu1L2Su&format=png" style="width: 30px; height:30px">
          <img src="https://img.icons8.com/?size=256&id=13963&format=png" style="width: 30px; height:30px">
          <img src="https://img.icons8.com/?size=256&id=oWiuH0jFiU0R&format=png"style="width: 30px; height:30px">
          <img src="https://img.icons8.com/?size=256&id=19318&format=png"style="width: 30px; height:30px">
        </div>
      </div>