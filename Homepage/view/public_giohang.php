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
                        $sql = "INSERT INTO HOADON(MA_KH, MA_NKSD_DICHVU,TONG_HOADON,THANHTIEN, THOIGIAN_LAP_HD) 
                        VALUES ('".$ma_kh."', '". $ma_nksddv."','".$tong_tien_dv."','".$tong_tien_dv."','".date('Y-m-d H:i:s')."')";
                        $result = $link->query($sql);
                        $ma_hd=$link->insert_id;
                        if(!empty($_POST["soluong_km"])){
                            $sql_dv = "SELECT MA_DV FROM CHITIET_NKSDDV WHERE MA_NKSD_DICHVU = '".$ma_nksddv."'";
                            $result_dv = $link->query($sql_dv);
                            $ma_km_arr = array_keys($_POST["soluong_km"]);

                                while($row_dv = $result_dv->fetch_assoc()) {
                                    foreach($ma_km_arr as $ma_km) {
                                    $sql_km = "SELECT KHUYENMAI.MA_KM, TENKM, GIATRI_PHANTRAM, GIATRI_THUC FROM KHUYENMAI INNER JOIN CHITIETKHUYENMAI ON KHUYENMAI.MA_KM = CHITIETKHUYENMAI.MA_KM WHERE KHUYENMAI.MA_KM = '".$ma_km."' AND MA_DV = '".$row_dv["MA_DV"]."'";
                                    $result_km = $link->query($sql_km);
                                    while($row= $result_km->fetch_assoc()) {
                                        $sql="INSERT INTO CHITIETHOADON(MA_CTHD,MA_HD,MA_KM,TENKM,GIATRI_PHANTRAM,GIATRI_THUC)
                                        VALUES (null,'".$ma_hd."','".$row["MA_KM"]."','".$row["TENKM"]."','".$row["GIATRI_PHANTRAM"]."','".$row["GIATRI_THUC"]."')";
                                        $result = $link->query($sql);
                                    }
                                }
                            }
                            $sql = "SELECT SUM(GIATRI_PHANTRAM) AS GIATRI_PHANTRAM1, SUM(GIATRI_THUC) AS GIATRI_THUC1 FROM CHITIETHOADON WHERE MA_HD = '".$ma_hd."'";
                            $result = $link->query($sql);
                            $row = $result->fetch_assoc();
                            $giatri_phantram = isset($row["GIATRI_PHANTRAM1"]) ? $row["GIATRI_PHANTRAM1"] : 0;
                            $giatri_thuc = isset($row["GIATRI_THUC1"]) ? $row["GIATRI_THUC1"] : 0; 
                            
                            $thanhtien = $tong_tien_dv * (1 - $giatri_phantram) - $giatri_thuc;
                            $tong_km_giam = $tong_tien_dv - $thanhtien;

                            $sql = "UPDATE HOADON SET THANHTIEN = '".$thanhtien."', TONG_KM_GIAM = '".$tong_km_giam."' WHERE MA_HD = '".$ma_hd."'";
                            $result = $link->query($sql);
                        }
                    }elseif(empty($ma_nksddv)){
                        $sql = "INSERT INTO HOADON(MA_KH, MA_NKDP,TONG_HOADON,THANHTIEN, THOIGIAN_LAP_HD) 
                        VALUES ('".$ma_kh."', '".$ma_nkdp."','".$tong_tien_phong."','".$tong_tien_phong."', '".date('Y-m-d H:i:s')."')";
                        $result = $link->query($sql);
                        $ma_hd=$link->insert_id;

                        if(!empty($_POST["soluong_km"])){
                            $sql_dp = "SELECT MA_PHONG FROM CHITIETNHATKIDATPHONG WHERE MA_NKDP = '".$ma_nkdp."'";
                            $result_dp = $link->query($sql_dp);
                            while($row_dp = $result_dp->fetch_assoc()) {
                                $sql = "SELECT MA_LOAIPHONG FROM PHONG WHERE MA_PHONG = '".$row_dp["MA_PHONG"]."'";
                                $result_lp = $link->query($sql);
                                $ma_km_arr = array_keys($_POST["soluong_km"]);

                                while($row_lp = $result_lp->fetch_assoc()) {
                                    foreach($ma_km_arr as $ma_km) {
                                        $sql_km = "SELECT KHUYENMAI.MA_KM, TENKM, GIATRI_PHANTRAM, GIATRI_THUC FROM KHUYENMAI INNER JOIN CHITIETKHUYENMAI ON KHUYENMAI.MA_KM = CHITIETKHUYENMAI.MA_KM WHERE KHUYENMAI.MA_KM = '".$ma_km."' AND MA_LOAIPHONG = '".$row_lp["MA_LOAIPHONG"]."'";
                                        $result_km = $link->query($sql_km);
                                        while($row= $result_km->fetch_assoc()) {
                                            $sql="INSERT INTO CHITIETHOADON(MA_CTHD,MA_HD,MA_KM,TENKM,GIATRI_PHANTRAM,GIATRI_THUC)
                                            VALUES (null,'".$ma_hd."','".$row["MA_KM"]."','".$row["TENKM"]."','".$row["GIATRI_PHANTRAM"]."','".$row["GIATRI_THUC"]."')";
                                            $result = $link->query($sql);
                                        }
                                    }
                                }
                            }
                            $sql = "SELECT SUM(GIATRI_PHANTRAM) AS GIATRI_PHANTRAM1, SUM(GIATRI_THUC) AS GIATRI_THUC1 FROM CHITIETHOADON WHERE MA_HD = '".$ma_hd."'";
                            $result = $link->query($sql);
                            $row = $result->fetch_assoc();
                            $giatri_phantram = isset($row["GIATRI_PHANTRAM1"]) ? $row["GIATRI_PHANTRAM1"] : 0;
                            $giatri_thuc = isset($row["GIATRI_THUC1"]) ? $row["GIATRI_THUC1"] : 0; 
                            $thanhtien = $tong_tien_phong * (1 - $giatri_phantram) - $giatri_thuc;
                            $tong_km_giam = $tong_tien_phong - $thanhtien;

                            $sql = "UPDATE HOADON SET THANHTIEN = '".$thanhtien."', TONG_KM_GIAM = '".$tong_km_giam."' WHERE MA_HD = '".$ma_hd."'";
                            $result = $link->query($sql);
                        }
                    }elseif(!empty($ma_nksddv) && !empty($ma_nkdp)){
                        $tong_hoa_don=$tong_tien_dv + $tong_tien_phong;
                        $sql = "INSERT INTO HOADON(MA_KH, MA_NKDP, MA_NKSD_DICHVU, TONG_HOADON,THANHTIEN, THOIGIAN_LAP_HD) 
                        VALUES ('".$ma_kh."', '".$ma_nkdp."', '".$ma_nksddv."', '".$tong_hoa_don."','".$tong_hoa_don."','".date('Y-m-d H:i:s')."')";
                        $result = $link->query($sql);
                        $ma_hd=$link->insert_id;

                        if(!empty($_POST["soluong_km"])){
                            $ma_km_arr = array_keys($_POST["soluong_km"]);
                            var_dump($ma_km_arr);   
                            $sql_dp = "SELECT MA_PHONG FROM CHITIETNHATKIDATPHONG WHERE MA_NKDP = '".$ma_nkdp."'";
                            $result_dp = $link->query($sql_dp);
                            while($row_dp = $result_dp->fetch_assoc()) {
                                $sql = "SELECT MA_LOAIPHONG FROM PHONG WHERE MA_PHONG = '".$row_dp["MA_PHONG"]."'";
                                $result_lp = $link->query($sql);

                                while($row_lp = $result_lp->fetch_assoc()) {
                                    foreach($ma_km_arr as $ma_km) {
                                        $sql_km = "SELECT KHUYENMAI.MA_KM, TENKM, GIATRI_PHANTRAM, GIATRI_THUC FROM KHUYENMAI INNER JOIN CHITIETKHUYENMAI ON KHUYENMAI.MA_KM = CHITIETKHUYENMAI.MA_KM WHERE KHUYENMAI.MA_KM = '".$ma_km."' AND MA_LOAIPHONG = '".$row_lp["MA_LOAIPHONG"]."'";
                                        $result_km = $link->query($sql_km);
                                        while($row= $result_km->fetch_assoc()) {
                                            $sql="INSERT INTO CHITIETHOADON(MA_CTHD,MA_HD,MA_KM,TENKM,GIATRI_PHANTRAM,GIATRI_THUC,LOAI_GIAM_GIA)
                                            VALUES (null,'".$ma_hd."','".$row["MA_KM"]."','".$row["TENKM"]."','".$row["GIATRI_PHANTRAM"]."','".$row["GIATRI_THUC"]."','LOAI_PHONG')";
                                            $result = $link->query($sql);
                                        }
                                    }
                                }
                            }
                            $sql_dv = "SELECT MA_DV FROM CHITIET_NKSDDV WHERE MA_NKSD_DICHVU = '".$ma_nksddv."'";
                            $result_dv = $link->query($sql_dv);
                            while($row_dv = $result_dv->fetch_assoc()) {
                                foreach($ma_km_arr as $ma_km) {
                                    $sql_km = "SELECT KHUYENMAI.MA_KM, TENKM, GIATRI_PHANTRAM, GIATRI_THUC FROM KHUYENMAI INNER JOIN CHITIETKHUYENMAI ON KHUYENMAI.MA_KM = CHITIETKHUYENMAI.MA_KM WHERE KHUYENMAI.MA_KM = '".$ma_km."' AND MA_DV = '".$row_dv["MA_DV"]."'";
                                    $result_km = $link->query($sql_km);
                                    while($row= $result_km->fetch_assoc()) {
                                        $sql="INSERT INTO CHITIETHOADON(MA_CTHD,MA_HD,MA_KM,TENKM,GIATRI_PHANTRAM,GIATRI_THUC,LOAI_GIAM_GIA)
                                        VALUES (null,'".$ma_hd."','".$row["MA_KM"]."','".$row["TENKM"]."','".$row["GIATRI_PHANTRAM"]."','".$row["GIATRI_THUC"]."','DICH_VU')";
                                        $result = $link->query($sql);
                                    }
                                }
                            }
                            $sql = "SELECT SUM(GIATRI_PHANTRAM) AS GIATRI_PHANTRAM1, SUM(GIATRI_THUC) AS GIATRI_THUC1 FROM CHITIETHOADON WHERE MA_HD = '".$ma_hd."' AND LOAI_GIAM_GIA='LOAI_PHONG'";
                            $result = $link->query($sql);
                            if ($result) {
                                $row = $result->fetch_assoc();
                                $giatri_phantram_p = isset($row["GIATRI_PHANTRAM1"]) ? $row["GIATRI_PHANTRAM1"] : 0;
                                $giatri_thuc_p = isset($row["GIATRI_THUC1"]) ? $row["GIATRI_THUC1"] : 0; 
                            }
                            $sql = "SELECT SUM(GIATRI_PHANTRAM) AS GIATRI_PHANTRAM1, SUM(GIATRI_THUC) AS GIATRI_THUC1 FROM CHITIETHOADON WHERE MA_HD = '".$ma_hd."' AND LOAI_GIAM_GIA='DICH_VU'";
                            $result = $link->query($sql);
                            if ($result) {
                                $row = $result->fetch_assoc();
                                $giatri_phantram_dv = isset($row["GIATRI_PHANTRAM1"]) ? $row["GIATRI_PHANTRAM1"] : 0;
                                $giatri_thuc_dv = isset($row["GIATRI_THUC1"]) ? $row["GIATRI_THUC1"] : 0;
                            }
                            $thanhtien = ($tong_tien_phong * (1 - $giatri_phantram_p) - $giatri_thuc_p) + ($tong_tien_dv * (1 - $giatri_phantram_dv) - $giatri_thuc_dv);
                            $tong_km_giam = $tong_tien_phong + $tong_tien_dv - $thanhtien;
                            $sql = "UPDATE HOADON SET THANHTIEN = '".$thanhtien."', TONG_KM_GIAM = '".$tong_km_giam."' WHERE MA_HD = '".$ma_hd."'";
                            $result = $link->query($sql);
                        }
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
