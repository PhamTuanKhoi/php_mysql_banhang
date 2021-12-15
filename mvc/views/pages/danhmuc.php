<?php
// foreach( $data["HO"] as $value ){
//     echo '<pre>';
//     print_r($value);
// }
?>
<?php
// while($row = mysqli_fetch_array($data["HO"])){
//     echo $row;
// }
?>
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr class="ex">
                    <th width="100px">STT</th>
                    <th width="auto">Tên Nhân Viên</th>
                    <th width="5px; !important">Tính Năng</th>
                </tr>
            </thead>
            <tbody>
                   <?php
                                   $stt = 1;
                            foreach( $data["HO"] as $value ){
                   ?>
                <tr>
                <td><?php echo $stt?></td>
                    <td style=""><?php echo $value["ten_dm"]?></td>
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
                    ?>
            </tbody>
        </table