
<?php

// http://localhost/live/Home/Show/1/2

class Quantri extends Controller{

    public $danhmuc;
    public $getdata;

    function __construct(){
        $this->danhmuc = $this->model("DanhmucModel");
        $this->getdata = $this->model("GetdataModel");
    }

    // Must have SayHi()
    function Sanpham(){
        $table = "sanpham";

        $kq = $this->getdata->getalldata($table);

            $this->view("quantri", [
                "Page"=>"sanpham",
                "san_pham" => $kq
            ]);

    }

        function Danhmuc(){
        $table = "danhmuc_sp";

        $kq = $this->getdata->getalldata($table);

            $this->view("quantri", [
                "Page"=>"danhmuc",
                "HO" => $kq
            ]);
    }

    function Thanhvien(){
        $table = "thanhvien";

        $kq = $this->getdata->getalldata($table);

            $this->view("quantri", [
                "Page"=>"thanhvien",
                "thanh_vien" => $kq
            ]);
    }




}
?>