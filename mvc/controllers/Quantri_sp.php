
<?php

// http://localhost/live/Home/Show/1/2

class Quantri_sp extends Controller{

    public $danhmuc;
    public $getdata;
    public $insert_sp;

    function __construct(){
        $this->danhmuc = $this->model("DanhmucModel");
        $this->getdata = $this->model("GetdataModel");
        $this->insert_sp = $this->model("SanphamModel");
    }
    function Sanpham(){

            $this->view("quantri", [
                "Page"=>"add_dm"
            ]);

    }

    // Must have SayHi()
    function them_sp(){
                $table = "danhmuc_sp";

                $ketqua = $this->getdata->getalldata($table);

                $error = NULL;
                if(isset($_POST['submit'])){
                    // Bẫy lỗi để trống trường dữ liệu trong Form
                    // Tên Sản phẩm
                    if($_POST['ten_sp'] == ''){
                        $error_ten_sp = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $ten_sp = $_POST['ten_sp'];
                    }
                    // Giá Sản phẩm
                    if($_POST['gia_sp'] == ''){
                        $error_gia_sp = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $gia_sp = $_POST['gia_sp'];
                    }
                    // Bảo hành
                    if($_POST['bao_hanh'] == ''){
                        $error_bao_hanh = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $bao_hanh = $_POST['bao_hanh'];
                    }
                    // Phụ kiện
                    if($_POST['phu_kien'] == ''){
                        $error_phu_kien = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $phu_kien = $_POST['phu_kien'];
                    }
                    // Tình trạng
                    if($_POST['tinh_trang'] == ''){
                        $error_tinh_trang = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $tinh_trang = $_POST['tinh_trang'];
                    }
                    // Khuyến mãi
                    if($_POST['khuyen_mai'] == ''){
                        $error_khuyen_mai = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $khuyen_mai = $_POST['khuyen_mai'];
                    }
                    // Trạng thái
                    if($_POST['trang_thai'] == ''){
                        $error_trang_thai = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $trang_thai = $_POST['trang_thai'];
                    }
                    // Chi tiết Sản phẩm
                    if($_POST['chi_tiet_sp'] == ''){
                        $error_chi_tiet_sp = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $chi_tiet_sp = $_POST['chi_tiet_sp'];
                    }
                    // Ảnh mô tả Sản phẩm
                    if($_FILES['anh_sp']['name'] == ''){
                        $error_anh_sp = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $anh_sp = $_FILES['anh_sp']['name'];
                        $tmp = $_FILES['anh_sp']['tmp_name'];
                    }
                    // Danh mục Sản phẩm
                    if($_POST['id_dm'] == 'unselect'){
                        $error_id_dm = '<span style="color:red;">(*)<span>';
                    }
                    else{
                        $id_dm = $_POST['id_dm'];
                    }
                    // Sản phẩm Đặc biệt
                    $dac_biet = $_POST['dac_biet'];
                
                    if(isset($ten_sp) && isset($gia_sp) && isset($bao_hanh) && isset($phu_kien) && isset($tinh_trang) && isset($khuyen_mai) && isset($trang_thai) && isset($chi_tiet_sp) && isset($anh_sp) && isset($id_dm) && isset($dac_biet)){
                
                        // move_uploaded_file($tmp, '../public/images/'.$anh_sp);
                        $kq = $this->insert_sp->insert_sp($ten_sp, $gia_sp, $bao_hanh, $phu_kien, $tinh_trang, $khuyen_mai, $trang_thai, $chi_tiet_sp, $anh_sp, $id_dm, $dac_biet);
                        // header('location:quantri.php?page_layout=danhsachsp');
                    }
                }
            $this->view("quantri", [
                "Page"=>"insert_sp",
                "danhmuc" => $ketqua,
                "insert_sp" => $kq
            ]);   
    }





}
?>


















