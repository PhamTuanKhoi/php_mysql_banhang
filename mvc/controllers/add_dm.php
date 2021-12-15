<?php

// http://localhost/live/Home/Show/1/2

class Add_dm extends Controller{

    public $didong;

    function __construct(){
        $this->didong = $this->model("DanhmucModel");
    }

    function Sanpham(){
        $this->view("aodep", [
            "Page"=>"add_dm"
        ]);
    }
    function insert(){

        // $didong = $this->model("didongModel");


        if(isset($_POST["add"])){
            $ten_dm = $_POST["ten_dm"];;
            $kq = $this->didong->insert($ten_dm);
            

            $this->view("aodep", [
                "Page"=>"add_dm",
                "resurt" => $kq
            ]);
        }
    }
}
?>