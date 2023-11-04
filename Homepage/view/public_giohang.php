<?php 
session_start();
$link=new mysqli("localhost","root","","khachsan");
if(!isset($_SESSION["cart"])) {
    $_SESSION["cart"] = array();
}
// $array=$_SESSION["cart"] = array();
// unset($array);
if(isset($_GET["action"])){
    switch($_GET["action"]){
        case "add":
            if(isset($_POST["soluongphong"])) {
                foreach($_POST["soluongphong"] as $ma_p => $sl_p){
                    $_SESSION["cart"][$ma_p] = $sl_p;
                }
            }
            elseif(isset($_POST["soluong_dv"])) {
                foreach($_POST["soluong_dv"] as $ma_dv => $sl_dv){
                    if (isset($_SESSION["cart"][$ma_dv])) {
                        $_SESSION["cart"][$ma_dv] += $sl_dv;
                    } else {
                        $_SESSION["cart"][$ma_dv] = $sl_dv;
                    }
                }
            }
            header("Location:public_giohang.php");
            break;

        case "delete":
            if(isset($_GET["ma_phong"])) {
                unset($_SESSION["cart"][$_GET["ma_phong"]]);
            }
            elseif(isset($_GET["ma_dv"])){
                unset($_SESSION["cart"][$_GET["ma_dv"]]);
            }
            header("Location:public_giohang.php");
            break;

        case "submit":
            if (isset($_POST["decrease"])||isset($_POST["increase"])||isset($_POST["update_button"])) {
                foreach($_POST["soluong_dv"] as $ma_dv => $sl_dv){
                    $_SESSION["cart"][$ma_dv] = $sl_dv;
                }
            }elseif(empty($_SESSION["cart"])){
                echo "
                <script>
                    alert('Danh sách đặt phòng rỗng! Không thể đặt phòng hay dịch vụ!');
                    setTimeout(function(){
                        window.location.href = 'public_giohang.php';
                    }, 50);
                </script>";
            }
            elseif(isset($_SESSION['user_client'])){  
                if(empty($_POST["name"])){
                    $_SESSION["error_name"]="Bạn chưa nhập họ tên!";
                }if(empty($_POST["phone"])){
                    $_SESSION["error_phone"]= "Bạn chưa nhập số điện thoại!";
                }if(empty($_POST["cccd"])){
                    $_SESSION["error_cccd"]= "Bạn chưa nhập căn cước công dân!";
                }if(empty($_POST["ngaydat"])){
                    $_SESSION["error_ngaydat"]= "Bạn chưa chọn ngày đặt!";
                }if(empty($_POST["ngaytra"])){
                    $_SESSION["error_ngaytra"]= "Bạn chưa chọn ngày trả!";
                }
                elseif(!empty($_POST["soluongphong"])||!empty($_POST["soluong_dv"])||!empty($_POST["soluongphong"]&&!empty($_POST["soluong_dv"]))) {
                    $sql="INSERT INTO KHACHHANG(MA_KH,HOTEN,SDT, CCCD) 
                    VALUES (null,'".$_POST["name"]."','".$_POST["phone"]."','".$_POST["cccd"]."')";
                    $result = $link->query($sql);
                    $ma_kh= $link->insert_id;
                    var_dump($sql);
                    $tong_tien_phong=0;
                    $tong_tien_dv=0;
                    
                    if(!empty($_POST["soluongphong"])){
                        $sql_phong="select * from PHONG where MA_PHONG in (".implode(",",array_keys($_POST["soluongphong"])).")";
                        $result_phong = $link->query($sql_phong);
                        $tong_tien_phong=0;
                        while($row= $result_phong->fetch_assoc()) {
                            $row_nkdp[] = $row;
                            $tong_tien_phong += $row["DONGIAPHONG"]; 
                        }
                        
                        $sql="INSERT INTO NHATKIDATPHONG(MA_NKDP,MA_KH,NGAYDAT,NGAYTRAPHONG,TONGTIENPHONG)
                        VALUES (null,'".$ma_kh."','".$_POST["ngaydat"]."','".$_POST["ngaytra"]."','".$tong_tien_phong."')";
                        $result = $link->query($sql);
                        
                        $ma_nkdp= $link->insert_id;
                        foreach ($row_nkdp as $row) {
                            $sql="INSERT INTO CHITIETNHATKIDATPHONG(MA_CTNKDP,MA_NKDP,MA_PHONG,TENPHONG,DONGIAPHONG)
                            VALUES (null,'".$ma_nkdp."','".$row["MA_PHONG"]."','".$row["TENPHONG"]."','".$row["DONGIAPHONG"]."')";
                            $result = $link->query($sql);
                        }
                    }
                    if(!empty($_POST["soluong_dv"])){
                        $sql_dv="select * from DICHVU where MA_DV in (".implode(",",array_keys($_POST["soluong_dv"])).")";
                        $result_dv = $link->query($sql_dv);
                        $thanh_tien=0;
                        $tong_tien_dv=0;
                        while($row= $result_dv->fetch_assoc()) {
                            $row_nksddv[] = $row;
                            $tong_tien_dv += $_POST["soluong_dv"][$row["MA_DV"]] * $row["DONGIADV"];
                        }

                        $sql="INSERT INTO NKSD_DICHVU(MA_NKSD_DICHVU,MA_KH,TONGTIEN_DV)
                        VALUES (null,'".$ma_kh."','".$tong_tien_dv."')";
                        $result = $link->query($sql);
                        
                        $ma_nksddv= $link->insert_id;
                        foreach ($row_nksddv as $row) {
                            $sql="INSERT INTO CHITIET_NKSDDV(MA_CT_NKSDDV,MA_NKSD_DICHVU,MA_DV,TENDV,SOLUONG,DONGIADV)
                            VALUES (null,'".$ma_nksddv."','".$row["MA_DV"]."','".$row["TENDV"]."','".$_POST["soluong_dv"][$row["MA_DV"]]."','".$row["DONGIADV"]."')";
                            $result= $link->query($sql);
                        }
                    }
                    if(empty($ma_nkdp)){
                        $tong_hoa_don = $tong_tien_dv;
                        $thoi_gian_lap_hd = date('Y-m-d H:i:s');
                        $sql = "INSERT INTO HOADON(MA_KH, MA_NKSD_DICHVU, TONG_HOADON, THOIGIAN_LAP_HD) 
                        VALUES ('".$ma_kh."', '". $ma_nksddv."', '".$tong_hoa_don."','".$thoi_gian_lap_hd."')";
                        $result = $link->query($sql);
                    }elseif(empty($ma_nksddv)){
                        $tong_hoa_don = $tong_tien_phong;
                        $thoi_gian_lap_hd = date('Y-m-d H:i:s');
                        $sql = "INSERT INTO HOADON(MA_KH, MA_NKDP,  TONG_HOADON, THOIGIAN_LAP_HD) 
                        VALUES ('".$ma_kh."', '".$ma_nkdp."', '".$tong_hoa_don."','".$thoi_gian_lap_hd."')";
                        $result = $link->query($sql);
                    }else{
                        $tong_hoa_don = $tong_tien_phong + $tong_tien_dv;
                        $thoi_gian_lap_hd = date('Y-m-d H:i:s');
                        $sql = "INSERT INTO HOADON(MA_KH, MA_NKDP, MA_NKSD_DICHVU, TONG_HOADON, THOIGIAN_LAP_HD) 
                        VALUES ('".$ma_kh."', '".$ma_nkdp."', '".$ma_nksddv."', '".$tong_hoa_don."','".$thoi_gian_lap_hd."')";
                        $result = $link->query($sql);
                    } echo"
                    <script>
                        alert('Đặt thành công!');
                        setTimeout(function(){
                            window.location.href = 'public_giohang.php';
                        }, 50);
                    </script>";
                }
            
            }else  echo "
            <script>
                var result = confirm('BẠN CẦN PHẢI ĐĂNG NHẬP TRƯỚC');
                if (result) { 
                    window.location.href = 'login.php';
                } else {
                    window.history.back();
                }
            </script>";
            break;
    }
}

if(!empty($_SESSION["cart"])){
    $sql_phong = "select * from PHONG where MA_PHONG in (".implode(",",array_keys($_SESSION["cart"])).")";
    $result_phong = $link->query($sql_phong);
    $sql_dv = "select * from DICHVU where MA_DV in (".implode(",",array_keys($_SESSION["cart"])).")";
    $result_dv = $link->query($sql_dv);

    $tong_sl_phong=0;
    $tong_tien_phong=0;
    
    $tong_sl_dv=0;
    $tong_tien_dv=0;
    $tong_tien=0;
    
    
    
}
?>
<?php 
$tong_sl_phong=0;
$tong_tien_phong=0;

$tong_sl_dv=0;
$tong_tien_dv=0;
$tong_tien=0;

include ("giohang.php")
?>
