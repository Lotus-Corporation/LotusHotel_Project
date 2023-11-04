<?php 
    $link=new mysqli("localhost","root","","khachsan");

    $sql = "
    (SELECT * FROM loaiphong WHERE MA_LOAIPHONG='STD')
    UNION ALL
    (SELECT * FROM loaiphong WHERE MA_LOAIPHONG='SUP')
    UNION ALL
    (SELECT * FROM loaiphong WHERE MA_LOAIPHONG='DLX' ) 
    UNION ALL
    (SELECT * FROM loaiphong WHERE MA_LOAIPHONG='SUT' )";
    $result=$link->query($sql);

?>
<style> 
    body{
        background:linear-gradient(rgb(231, 245, 249),rgb(193, 233, 244));
        margin: 0
    }
    .layout2_anh{
        width: 100%;
        height: 600px; 
        position:relative; 
        top:55px; 
        margin-bottom: 7%;
    }   
    .layout2_anh_opacity{
        width: 100%;
        height: 600px; 
        position:absolute; 
        top:0;
        background-color: black; 
        opacity:0.5;
    }


    .layout2_con{
        height:350px;
        margin: 2%;
        text-decoration: none;
        border-radius: 5px;
        position: relative;
        overflow: hidden;
        transition: 0.25s
    }
    .layout2_con:hover{
        transform: scale(1);
        opacity: 0.9
    }
    .layout2_con > img{
        transition: 0.7s;
    }
    .layout2_con > img:hover{
        transform: scale(1.07);
        opacity: 0.93
    }
    .mota2{
        height: 10px;
        position: absolute;
        top:230px;
        width: 100%;
        padding: 20px;
        background-color: #fff;
        color: black;
        font-size: 15px;
        transition: 0.5s;
        font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    .mota2:hover{
        background-color: rgb(28, 113, 136);
        color: #fff;
    }

     .layout3 {
    display: flex;
    width: 1380px;
    height: auto;
    margin: auto;
    flex-wrap: nowrap;
    justify-content: space-evenly;
    align-items: center;
}
</style>
<h1 style="text-align: center"><b>LOẠI PHÒNG</b></h1>
<div class="layout3">
<?php
    while ($row=$result->fetch_assoc())
    {
?>
<div class="layout2">
    <a href="">
        <div class="layout2_con">
            <img src="img/loaiphong/<?php echo $row["Hinhanh"]; ?>" style="width: 100%; height: 230px;">
            <div class="mota2">
                <h2 style="margin-top: -10px;margin-left:100px"><?php echo $row["LOAIPHONG"] ?></h2>
            </div>
        </div>
    </a>
</div>
<?php
    }
?>
</div>