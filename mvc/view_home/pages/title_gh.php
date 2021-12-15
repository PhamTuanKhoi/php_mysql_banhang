<!--                 
                <div class="col-sm-6">
                    <div style="border: 0;"  class="shopping-item">
                        <?php
                        // if(isset($_SESSION['cart'])){
                        //     $totalPriceAll = 0;
                        //     foreach($_SESSION['cart'] as $value){
                        //         $totalPrice  = $value['quantity']*$value['gia_sp'];
                        //         $totalPriceAll+=$totalPrice;
                        ?>
                        
                        <a href="http://localhost/apple/home/mycart">
                            <span style=" width: 160px;
                                            height: 50px;
                                            border-radius: 0;
                                            border: 7px solid #ee5057;
                                            font-size: 20px;" class="product-count"><b>Cart - $$$</b>
                                <span class="cart-amunt"></span> 
                                <i class="fa fa-shopping-cart"></i>
                               
                            </span>
                            
                       </a>
                        
                            <?php
                            //    }
                            // }else{
                            ?>
                        <a href="cart.html">Cart - <span class="cart-amunt">$000</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                            <?php
                            //    }
                            ?>
                    </div>
                </div>
                <?php
                // if(isset($_SESSION['cart'])){
                ?>
                <div class="session">
                    <p style="font-size: 20px;margin-left: 7px;" class="P">
                    <?php
                    // if(isset($_SESSION['cart'])){
                        // echo count($_SESSION['cart']);
                    // }
                    ?>
                    </p>
                </div>

<?php
// if(isset($_SESSION['cart'])){
//     echo count($_SESSION['cart']);
// }

// echo count($_SESSION['cart']);
// echo '<pre>';
// print_r($_SESSION['cart']['1']);

?>
<style>
    .session{
        background-color: rgb(123, 255, 0);
        margin-left: 1155px;
        width: 40px;
        height: 40px;
        margin-top: 70px;
        z-index: 2000;
        font-size: 15px;
        font-weight: bold;
        color: black;
        border-radius: 20px;
        border: 7px solid rgb(123, 255, 0);
    }

</style> -->
<div class="col-sm-6">
    <div class="shopping-item">
        <a href="http://localhost/apple/home/mycart">Cart - <span class="cart-amunt">$800</span> 
            <i class="fa fa-shopping-cart"></i> 
            <?php
            if(isset($_SESSION['cart'])){
            ?>
            <span class="product-count"><?=count($_SESSION['cart'])?></span>
            <?php
            }
            ?>
        </a>
    </div>
                </div>