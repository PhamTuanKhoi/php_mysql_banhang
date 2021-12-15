<?php
// http://localhost/live/Home/Show/1/2

class Home extends Controller{


    public $danhmuc;
    public $getdata;
    public $getdata_id;
    public $add_kh;
    public $add_dh;

    function __construct(){
        $this->danhmuc = $this->model("DanhmucModel");
        $this->getdata = $this->model("GetdataModel");
        $this->getdata_id = $this->model("GetdataModel");
        $this->add_kh = $this->model("SanphamModel");
        $this->add_dh = $this->model("SanphamModel");
    }
    // Must have SayHi()
    function Sanpham(){
        $table = "sanpham";
        $kq = $this->getdata->getalldata($table);

        $table = "danhmuc_sp";
        $kq_dm = $this->getdata->getalldata($table);
        
            $this->view_home("trangchu", [
                "Page"=>"trangchu",
                "Page_dm"=>"danhmuc",
                "Page_pl"=>"phanloai",
                "page_giohang" => "title_gh",
                "san_pham" => $kq,
                "danh_muc" => $kq_dm
            ]);

    }
    function checkout(){

        $this->view_home("donhang", [
            "Page" => "donhang"
        ]);

    }
    // function single(){

    //     $this->view_home("single", [
    //     ]);

    // }
    function mycart(){
        if(isset($_SESSION['cart'])){
            if(isset($_POST["update_cart"])){
                foreach ($_SESSION["cart"] as $value) {

                    if($_POST["sl".$value["id_sp"]]){
                        $quantity = ($_SESSION["cart"][$value["id_sp"]]["quantity"] = $_POST["sl".$value["id_sp"]]);
                    }
                }

            }
        }
        // //////////////////////////////////////////////////////////////////////////////////
        if($_COOKIE['login'] != []){
                    if(isset($_POST['submit'])){
                        $city = $_POST['city'];
                        $quan = $_POST['quan'];
                        $diachi = $_POST['diachi'];
                        $phone = $_POST['phone'];
                        $note = $_POST['note'];
                        $totalPriceAll = 0;

                        $cookie=($_COOKIE['login']);
                        $table = "khachhang";
                        $kq_kh = $this->getdata_id->getdataid_tv($table, $cookie);

                            $id_kh = $kq_kh['id_kh'];   
                            $curentdate = date("Y-m-d H:i:s");
                            foreach($_SESSION['cart'] as $row){
                                $totalPrice  = $row['quantity']*$row['gia_sp'];
                                $totalPriceAll+=$totalPrice;
                            }
                        $add_dh = $this->add_dh->insert_dh($curentdate, $totalPriceAll, $id_kh, $city, $quan, $diachi, $phone, $note);

                        $table_dh = "donhang";
                        $kq_dh = $this->getdata_id->getdata_dh($table_dh, $phone);

                                $iddh = $kq_dh['id_dh'];   
                                foreach($_SESSION['cart'] as $row){
                                    $id_sp = $row['id_sp'];
                                    $quantity_gh = $row['quantity'];
                                    $totalPrice  = $row['quantity']*$row['gia_sp'];
                                    $add_gh = $this->add_dh->insert_gh($id_sp, $quantity_gh, $iddh, $totalPrice);
                                }
                        unset($_SESSION['cart']);

                }        
        }


            
        
        $this->view_home("carts", [
            "Page"=>"cart",
        ]);

    }
     
    function carthuy($id, $huy){
        if(isset($_SESSION['cart'])){
            if($huy == 'huy'){
                unset($_SESSION["cart"][$id]);
            }
        }
        echo '<pre>';
        print_r($_SESSION['cart']);
        header('location:http://localhost/apple/Home/mycart');
    }
    function cart($id, $huy){

        $table = "sanpham";

        // $quantity= !empty($_GET['quantity']) ? (Int)$_GET['quantity'] : 1;
        $quantity = $_GET['quantity'] = 1;
        $action= !empty($_GET['action']) ? (Int)$_GET['action'] : 'add';

        $row = $this->getdata_id->getdataid_sp($table, $id);

        if($row && $action =='add'){
            if(isset($_SESSION['cart'][$id])){
                $_SESSION['cart'][$id]['quantity'] = $quantity;
            }
            else
            {
                $item = [
                    'id_sp' => $row['id_sp'],
                    'ten_sp' => $row['ten_sp'],
                    'gia_sp' => $row['gia_sp'],
                    'quantity' => $quantity,
                    'anh_sp' => $row['anh_sp'],
                    'soluong' => $row['soluong'],
                ];
                $_SESSION['cart'][$id] = $item;
            }
        }
            echo '<pre>';
            print_r($_SESSION['cart']);
            header('location:http://localhost/apple/Home/Sanpham');
        // $this->view_home("carts", [
        //     "Page"=>"cart",
        //     "session" => $_SESSION['cart']
        // ]);

    }

    function Show($a, $b){        
        // Call Models
        $teo = $this->model("SinhVienModel");
        $tong = $teo->Tong($a, $b); // 3

        // Call Views
        $this->view("aodep", [
            "Page"=>"news",
            "Number"=>$tong,
            "Mau"=>"red",
            "SoThich"=>["A", "B", "C"],
            "SV" => $teo->SinhVien()
        ]);
    }
}
?>