        <?php
        // while($row = mysqli_fetch_array($data['san_pham'])){
        //         print_r($row);
        // }
?>
        <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                        <?php
                                        foreach( $data['san_pham'] as $value){
                                            // if($value['id_sp']< 5){
                                    ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img style="width: 170px;height:300px;border: 30px solid white;margin-left:22px;" src="../public/images/<?php echo $value['anh_sp'] ?>" alt="">
                                    <div class="product-hover">
                                        <a href="http://localhost/apple/Home/cart/<?= $value['id_sp']?>/add_sp" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.html"><?= $value['ten_sp']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins>$<?= number_format($value['gia_sp'])?></ins> <del>$100.00</del>
                                </div> 
                            </div>
                            <?php
                                        // }
                                    }
                                    ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    




        





               