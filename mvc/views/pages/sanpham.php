<?php
// foreach( $data["HO"] as $value ){
//     echo '<pre>';
//     print_r($value);
// }
?>
<?php
// while($row = mysqli_fetch_array($data["HO"])){
//     echo '<pre>';
//     print_r($value);
// }
?>
<b>CHỨC NĂNG CHÍNH:</b><Br>
        <a href=""><button class="nv btn add-new" type="button" data-toggle="tooltip" data-placement="top"
            title="Thêm Nhân Viên"><i class="fas fa-user-plus"></i></button></a>
        <button class="nv" type="button" onclick="sortTable()" data-toggle="tooltip" data-placement="top"
            title="Lọc Dữ Liệu"><i class="fa fa-filter" aria-hidden="true"></i></button>
        <button class="nv xuat" data-toggle="tooltip" data-placement="top" title="Xuất File"><i
                class="fas fa-file-import"></i></button>
        <button class="nv cog" data-toggle="tooltip" data-placement="bottom" title=""><i
                class="fas fa-cogs"></i></button>
        <div class="table-title">
            <div class="row">

            </div>

        </div>
        <!-- ///////////////////////////////////////////////////////////////////// -->
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr class="ex">
                    <th width="100px">STT</th>
                    <th width="auto">Tên Sản phẩm</th>
                    <th width="auto">Giá sản phẩm</th>
                    <th width="auto">Tình trạng</th>
                    <th width="auto">Trạng thái</th>
                    <th width="auto">Đặc biệt</th>
                    <th width="auto">Hình ảnh</th>
                    <th width="5px; !important">Tính Năng</th>
                </tr>
            </thead>
            <tbody>
                   <?php
                    // echo '<pre>';
                    // print_r($data["sanpham"]);
                                   $stt = 1;
                            foreach( $data["san_pham"] as $value ){
                                // print_r($value);
                                // if(isset( $value !== '')){
                                //     adf
                                // }
                                // else{    
                   ?>
                <tr>
                <td style="font-size: 15px;"><?php echo $stt?></td>
                    <td style="font-size: 15px;"><?php echo $value["ten_sp"]?></td>
                    <td style="font-size: 15px;"><?php echo number_format($value["gia_sp"])?>$</td>
                    <td style="font-size: 15px;"><?php echo $value["tinh_trang"]?></td>
                    <td style="font-size: 15px;"><?php echo $value["trang_thai"]?></td>
                    <td style="font-size: 15px;"><?php echo $value["dac_biet"]?></td>
                    <td><img width="70px" src="../public/images/<?php echo $value['anh_sp']?>"></td>
                    <td>
                        <a class="add" title="Lưu Lại" data-toggle="tooltip"><i class="fa fa-floppy-o"
                                aria-hidden="true"></i></a>
                        <a class="edit" title="Sửa" data-toggle="tooltip"><i class="fa fa-pencil"
                                aria-hidden="true"></i></a>
                        <a class="delete" title="Xóa" data-toggle="tooltip"><i class="fa fa-trash-o"
                                aria-hidden="true"></i></a>
                    </td>
                </tr>
                    <?php
                            $stt++;
                            }
                        // }
                    ?>
            </tbody>
        </table