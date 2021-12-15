<?php
// foreach($data['san_pham'] as $value){
//     print_r($value);
// }
?>


<div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">

                        <div class="brand-list">
                        <?php
                        foreach(  $data['danh_muc'] as $value_dm ){
                            if($value_dm['anh_dm'] != []){
                        ?>
                            <img src="../public/img/<?php echo $value_dm['anh_dm'] ?>" alt="">             
                            <?php
                            }
                        }
                        ?>             
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    <style>
        .owl-carousel .owl-item img {
            display: block;
            width: 100%;
            -webkit-transform-style: preserve-3d;
        }
    </style>
