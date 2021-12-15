<?php
class SanphamModel extends DB{
    function insert_sp($ten_sp, $gia_sp, $bao_hanh, $phu_kien, $tinh_trang, $khuyen_mai, $trang_thai, $chi_tiet_sp, $anh_sp, $id_dm, $dac_biet){
        $sql = "INSERT INTO sanpham (ten_sp,gia_sp,bao_hanh,phu_kien,tinh_trang,khuyen_mai,trang_thai,chi_tiet_sp,anh_sp,id_dm,dac_biet) VALUES ('$ten_sp','$gia_sp','$bao_hanh','$phu_kien','$tinh_trang','$khuyen_mai','$trang_thai','$chi_tiet_sp','$anh_sp','$id_dm','$dac_biet')";

        $resurt = false;
        if(mysqli_query($this->con, $sql)){
            $resurt = true;                 
        }
        return json_encode( $resurt );
    }

    function insert_kh($name, $city, $quan, $diachi, $phone, $id_tv)
    {
        $sql = "INSERT INTO `khachhang`(`ten`, `thanh_pho`, `quan`, `dia_chi`, `phone`, id_thanhvien) VALUES ('$name','$city','$quan','$diachi','$phone', '$id_tv')";

        $resurt = false;
        if(mysqli_query($this->con, $sql)){
            $resurt = true;                 
        }
        return json_encode( $resurt );
    }

    function insert_dh($time, $tongtien, $id_kh, $city, $quan, $diachi, $phone, $note)
    {
        $sql = "INSERT INTO `donhang`(`thoi_gian`, `tongtien`, `id_kh`, `cty`, `quan`, `diachi`, `phone`, `note`) VALUES ('$time','$tongtien','$id_kh','$city','$quan','$diachi','$phone','$note')";

        $resurt = false;
        if(mysqli_query($this->con, $sql)){
            $resurt = true;                 
        }
        return json_encode( $resurt );
    }

    function insert_gh($id_sp, $quantity, $id_dh, $thanhtien)
    {
        $sql = "INSERT INTO `giohang`(`id_sp`, `quantity`, `id_dh`, `thanhtien`) VALUES ('$id_sp','$quantity','$id_dh','$thanhtien')";

        $resurt = false;
        if(mysqli_query($this->con, $sql)){
            $resurt = true;                 
        }
        return json_encode( $resurt );
    }
}

?>