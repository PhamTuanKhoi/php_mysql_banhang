<?php
// http://localhost/live/Home/Show/1/2

class Taikhoan extends Controller{

    public $getdata_sigin;

    function __construct(){
        $this->getdata_sigin = $this->model("GetdataModel");
    }
    // Must have SayHi()
   function Sanpham(){

    if(isset($_POST['submit'])){
        $email= $_POST['username'];
        $matkhau= $_POST['password'];

        $table = "thanhvien";
        $sigin= $this->getdata_sigin->getdata_signin($table, $email, $matkhau);
        if($sigin){
            $id_tv = $sigin['id_thanhvien'];
            setcookie('login', $id_tv, time()+7*24*60*60, '/');
        }

        $this->view_tk("Taikhoan",[
            "Page"=>"login",
            "sigin"=> $sigin
        ]);
    }
       $this->view_tk("Taikhoan",[
           "Page"=>"login"
       ]);
   }

   function Account(){

    $table = "khachhang";
    $id = $_COOKIE['login'];
    $clent = $this->getdata_sigin->getdataid_tv($table, $id);

    // $tabledh = "donhang";
    $id_kh = $clent['id_kh'];
    $check = $this->getdata_sigin->getdata_dhid($id_kh);
    if($check != []){
        $item = [
            'id_dh' => $check['id_dh'],
        ];
        $_SESSION['check'] = $item;
            echo"<pre>";
            print_r($_SESSION['check']);
        // foreach($_SESSION['check'] as $pro){
        //     $cart = $this->getdata_sigin->getdata_gh($pro['id_dh']);
        //     if($cart !=[]){
        //         $_SESSION['checkout'] = $cart;
        //     }
        //     // foreach($_SESSION['checkout'] as $lia){
        //     //     echo"<pre>";
        //     //     print_r($lia);
        //     // }
        // }
        
    }
    // if($_SESSION['checkout'] != []){
        // foreach($_SESSION['checkout'] as $lia){
            // echo"<pre>";
            // print_r($_SESSION['checkout']);
        // }
    // }

    //    $this->view_tk("account",[
    //        "Page"=>"account",
    //        'check'=>$check,
    //        'clent' => $clent,
    //        'cart' => $cart
    //    ]);
   }
}
?>