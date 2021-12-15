<?php
class DanhmucModel extends DB{
    function insert($ten_dm){
        $sql = "INSERT INTO danhmuc_sp(ten_dm) VALUES('$ten_dm')";
        $resurt = false;
        if(mysqli_query($this->con, $sql)){
            $resurt = true;                 
        }
        return json_encode( $resurt );
    }

    
//     function getalldata($table){
//         $sql = "SELECT * FROM $table";
//         $resurt = false;
//         if(mysqli_query($this->con, $sql)){
//             $resurt = true;                 
//         }
//         return json_encode( $resurt );
//     }
}

?>