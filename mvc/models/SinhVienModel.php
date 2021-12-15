<?php
class SinhVienModel extends DB{
    public function GetSV(){
        return "Nguyen Van Teo";
    }

    public function Tong($n, $m){
        return $n + $m;
    }

    public function SinhVien(){
        $qr = "SELECT * FROM danhmuc_sp";
        return mysqli_query($this->con, $qr);
    }

}
?>