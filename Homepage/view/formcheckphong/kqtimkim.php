<link rel="stylesheet" href="css/public.css"> 
<style>
                    body{
                        background-color:aliceblue;
                        margin: 0;
                    }   
                </style>
<?php
    if(isset($_POST["tukhoa"])) 
    {
        $tukhoa=$_POST["tukhoa"];
        $link=new mysqli("localhost","root","","khachsan");
        $sql="select * from dichvu where TENDV like '%$tukhoa%'";
        $result=$link->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
?>

                <div class="layout_anh">
                    <img src=""style="height: 600px; width:100%">
                    <div class="loigoi">
                        <div style=" font-size:60px; margin-left:15%">SERVICES</div>
                    </div>
                </div>
                <?php
                    while ($row=$result->fetch_assoc())
                    {
                ?>
                <div class="layout">
                    <a href="">
                        <div class="layout_con">
                            <img src="img/dichvu/<?php echo $row["HINHANHDV"]; ?>" style="width: 100%; height: 310px;">
                            <div class="mota">
                                <h2><?php echo $row["TENDV"] ?></h2>
                                <p><?php echo $row["DONGIADV"]?> VND/<?php echo $row["DONVITINH"]?></p>
                                <h3>CHI TIẾT-></h3>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
                    }
                ?>
<?php
            }
        }
    }
    else echo"ko tim thay";

?>