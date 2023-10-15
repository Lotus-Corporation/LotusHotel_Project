<link rel="stylesheet" href="./css/phongnoibat.css"> 
<?php 
    $link=new mysqli("localhost","root","","khachsan");
    $sql = "
    (SELECT * FROM PHONG WHERE MA_LOAIPHONG='STD' LIMIT 1)
    UNION ALL
    (SELECT * FROM PHONG WHERE MA_LOAIPHONG='DLX' LIMIT 1)
    UNION ALL
    (SELECT * FROM PHONG WHERE MA_LOAIPHONG='SUP' LIMIT 2)
    UNION ALL
    (SELECT * FROM PHONG WHERE MA_LOAIPHONG='SUT' LIMIT 2)
";

    $result=$link->query($sql);
?>

<div class="mau_layout" style="
    height: 1100px;
">
    <div class="loigoi">
        <h3 style=" font-weight: 100; " >một số phòng nổi bật của chúng tôi</h3>
    </div>
    <?php
    while ($row=$result->fetch_assoc())
    {
    ?>
    <div class="layout">
        <a href="">
            <div class="layout_con">
                <img src="img/<?php echo $row["ANHPHONG"]; ?>">
                <div class="price">Price:<b> <?php echo $row["DONGIAPHONG"] ?>đ</b></div>
                <div  class="tenphong">
                    <div><h2><?php echo $row["TENPHONG"] ?></h2></div>
                    <i class="fa fa-bed" aria-hidden="true">1 bed</i>
                    <i class="fa fa-users" aria-hidden="true">Max <?php echo $row["SONGUOITOIDA"]?></i>
                </div>
            </div>
        </a>
    </div>
    <?php
    }
    ?>
</div> <!-- Đây là thẻ đóng cho .mau_layout -->

