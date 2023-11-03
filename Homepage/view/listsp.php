<button name="update_button" class="update">Update</button>
<?php 
while($row = $result_phong->fetch_assoc()) {
?>
    <div class="sanpham" >
        <img src="../img/phong/<?php echo $row["ANHPHONG"] ?>" style="border-radius:20px;">
        <div class="name"><?php echo $row["TENPHONG"] ?></div>
        <div class="soluong1">
            <input type="hidden" value="1" min="1" max="99" name="soluongphong[<?php echo $row["MA_PHONG"] ?>]">
        </div>
        <div class="tonggia"><?php echo $row["DONGIAPHONG"]?></div>
        <a href="public_giohang.php?action=delete&&ma_phong=<?php echo $row["MA_PHONG"] ?>"><i class="fa fa-times"></i></a>
    </div>
<?php 
    $tong_sl_phong = $tong_sl_phong + 1;
    $tong_tien_phong = $tong_tien_phong + $row["DONGIAPHONG"];
    $tong_tien=$tong_tien_phong;
}
while($row = $result_dv->fetch_assoc()) {
?>
    <div class="sanpham" >
        <img src="../img/dichvu/<?php echo $row["HINHANHDV"] ?>" style="border-radius:20px;">
            <div class="name"><?php echo $row["TENDV"] ?></div>
            <div><?php echo $row["DONGIADV"] ?>/<?php echo $row["DONVITINH"]?></div>
        <div class="soluong">
            <button type="submit" class="decrease" name="decrease">-</button>
            <input type="number" value="<?php echo $_SESSION["cart"][$row["MA_DV"]]?>" min="1" max="99" name="soluong_dv[<?php echo $row["MA_DV"] ?>]">
            <button type="submit" class="increase" name="increase">+</button>
        </div>
        <div class="tonggia"><?php echo $row["DONGIADV"] * $_SESSION["cart"][$row["MA_DV"]] ?></div>
        <a href="public_giohang.php?action=delete&&ma_dv=<?php echo $row["MA_DV"] ?>"><i class="fa fa-times"></i></a>
    </div>
<?php 
    $tong_sl_dv = $tong_sl_dv + $_SESSION["cart"][$row["MA_DV"]];
    $tong_tien_dv += $row["DONGIADV"] * $_SESSION["cart"][$row["MA_DV"]];
    $tong_tien=$tong_tien_dv;
    $tong_tien= $tong_tien_phong+ $tong_tien_dv;
}
?>
<script>
document.querySelectorAll('.sanpham .soluong').forEach(function(soluong) {
    var decrease = soluong.querySelector('.decrease');
    var increase = soluong.querySelector('.increase');
    var input = soluong.querySelector('input');

    decrease.addEventListener('click', function() {
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    });

    increase.addEventListener('click', function() {
        if (parseInt(input.value) < 99) {
            input.value = parseInt(input.value) + 1;
        }
    });
});
</script>