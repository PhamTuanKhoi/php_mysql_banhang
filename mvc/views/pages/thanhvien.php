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
                    <th width="auto">Email</th>
                    <th width="auto">Quyền Truy Cập</th>
                    <th width="5px; !important">Tính Năng</th>
                </tr>
            </thead>
            <tbody>
                   <?php
                //    if(isset( null != $data["san_pham"])){
                    // echo '<pre>';
                    // print_r($data["sanpham"]);
                                   $stt = 1;
                            foreach( $data["thanh_vien"] as $value ){
                   ?>
                <tr>
                <td><?php echo $stt?></td>
                    <td style=""><?php echo $value["email"]?></td>
                    <td style=""><?php echo $value["quyentruycap"]?></td>
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