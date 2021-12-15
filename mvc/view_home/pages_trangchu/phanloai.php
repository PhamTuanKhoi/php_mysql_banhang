<?php
// foreach($data['san_pham'] as $value){
//     print_r($value);
// }
?>
 
 <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                                    <?php
                                        foreach($data['san_pham'] as $value_pl){
                                            if($value_pl['id_sp'] < 4){
                                    ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img style="width:50px;" src="../public/images/<?= $value_pl['anh_sp']?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?= $value_pl['ten_sp']?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$<?= number_format($value_pl['gia_sp'])?></ins> <del>$425.00</del>
                            </div>                            
                        </div>
                                    <?php
                                       }
                                    }
                                    ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                                  <?php
                                        foreach($data['san_pham'] as $value_pl){
                                            if($value_pl['id_sp'] < 4){
                                    ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img style="width:50px;" src="../public/images/<?= $value_pl['anh_sp']?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?= $value_pl['ten_sp']?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$<?= number_format($value_pl['gia_sp'])?></ins> <del>$425.00</del>
                            </div>                            
                        </div>
                                    <?php
                                       }
                                    }
                                    ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <?php
                                        foreach($data['san_pham'] as $value_pl){
                                            if($value_pl['id_sp'] < '4'){
                                    ?>
                        <div class="single-wid-product">
                            <a href="single-product.html"><img style="width:50px;" src="../public/images/<?= $value_pl['anh_sp']?>" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.html"><?= $value_pl['ten_sp']?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$<?= number_format($value_pl['gia_sp'])?></ins> <del>$425.00</del>
                            </div>                            
                        </div>
                                    <?php
                                       }
                                    }
                                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div> 