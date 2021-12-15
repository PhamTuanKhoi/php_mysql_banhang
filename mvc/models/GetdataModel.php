<?php
class GetdataModel extends DB{
        //thuc thi cau tri van
        public function execute($sql)
        {
           $this->result = $this->con->query($sql);
           return $this->result;
        }
        //lay du lieu
        public function getdata()
        {
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }
        //lay all du lieu
        public function getalldata($table)
        {
            $sql = "SELECT * FROM $table";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data = 0;
            }else{
               while($datas = $this->getdata()){
                   $data[] = $datas;
               }
            }
            return $data;
        }
        

        //lay so lieu can sua theo id
        public function getdataid_sp($table, $id){
            $sql = "SELECT * FROM $table WHERE id_sp= '$id'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }

        public function getdata_dh($table, $phone){
            $sql = "SELECT * FROM $table WHERE phone= '$phone'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }

        public function getdata_gh($id_dh){
            $sql = "SELECT giohang.quantity, giohang.id_sp, giohang.id_gh, donhang.tongtien, donhang.thoi_gian, donhang.diachi FROM giohang JOIN donhang ON giohang.id_dh = donhang.id_dh WHERE donhang.id_dh = '$id_dh'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = ($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }

        public function getdata_dhid($id_kh){
            $sql = "SELECT * FROM donhang WHERE id_kh= '$id_kh'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = ($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }

        // public function getdata_dhid($id_kh){
        //     $qr = "SELECT * FROM donhang WHERE id_kh= '$id_kh'";
        //     return mysqli_query($this->con, $qr);
        // }

        public function getdataid_tv($table, $id){
            $sql = "SELECT * FROM $table WHERE id_thanhvien= '$id'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }

        public function getdata_signin($table, $email, $matkhau){
            $sql = "SELECT * FROM $table WHERE email = '$email' AND matkhau = '$matkhau'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = mysqli_fetch_array($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }

        public function join_sp_gh($id_sp){
            $sql = "SELECT giohang.quantity, sanpham.ten_sp, sanpham.gia_sp, sanpham.tinh_trang, sanpham.anh_sp, sanpham.khuyen_mai, sanpham.id_sp FROM giohang JOIN sanpham ON giohang.id_sp = sanpham.id_sp WHERE sanpham.id_sp = '$id_sp'";
            $this->execute($sql);
            if($this->num_rows()!=0){
                $data = ($this->result);
            }else{
                $data = 0;
            }
            return $data;
        }
    ///dem so luong ban ghi
        public function num_rows()
        {
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }else{
                $num = 0;
            }
            return $num;
        }
    }
    
?>