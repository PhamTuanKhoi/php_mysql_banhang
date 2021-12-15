<?php
$product = !empty($_SESSION['cart']) ? ($_SESSION['cart']) : [];
// if($product != []){
//         foreach($product as $value){
//             echo "<pre>";
//             print_r($value['id_sp']);
//         }
//     }

?>

<form method="post" enctype="multipart/form-data">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove" style="font-size:6px;font-weight:bold;"></th>
                                            <th class="product-thumbnail">Image </th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <?php
                                        if($product !== []){
                                            $totalPriceAll = 0;
                                        foreach($product as $value){
                                            $totalPrice  = $value['quantity']*$value['gia_sp'];
                                            $totalPriceAll+=$totalPrice;
                                            // echo $totalPriceAll;
                                    ?>
                                    <tbody>
                                        <tr class="cart_item">
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="http://localhost/apple/Home/carthuy/<?= $value['id_sp']?>/huy">×</a> 
                                            </td>

                                            <td class="product-thumbnail">
                                                <a href="single-product.html"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="http://localhost/apple/public/images/<?php echo $value["anh_sp"]?>"></a>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html"><?= $value['ten_sp']?></a> 
                                            </td>
                                            <td class="product-price">
                                                <span class="amount"><?= number_format($value['gia_sp'])?>$</span> 
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="button" class="minus" value="-">
                                                    <input name="sl<?= $value['id_sp']?>" type="number" size="4" class="input-text qty text" value="<?= $value['quantity']?>" min="1" step="1">
                                                    <a href="http://localhost/apple/Home/cart/<?= $value['id_sp']?>/yes"><input name="total" type="submit" class="plus" value="+"></a>
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount"><?= number_format($totalPrice)?>$</span> 
                                            </td>
                                        </tr>
                                        <?php
                                                }
                                            }
                                            if($product){
                                        ?>
                                        <tr>
                                        <td style="font-weight:bold;" colspan="2">TOTALALL</td>
                                        <td style="font-weight:bold;"colspan="4"><?php echo number_format($totalPriceAll)?>$</td>
                                        </tr>
                                        <?php
                                            }
                                        ?>
                                        <tr>
                                            <td class="actions" colspan="6">
                                                <div class="coupon">
                                                    <label for="coupon_code">Coupon:</label>
                                                    <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                    <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                                </div>
                                                <a href=""><input type="submit" value="Update Cart" name="update_cart" class="button"></a>
                    
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                           



                            <!-- /////////////////////////// -->
                            <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Check Out</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam tristique, diam in consequat iaculis, est purus iaculis mauris, imperdiet facilisis ante ligula at nulla. Quisque volutpat nulla risus, id maximus ex aliquet ut. Suspendisse potenti. Nulla varius lectus id turpis dignissim porta. Quisque magna arcu, blandit quis felis vehicula, feugiat gravida diam. Nullam nec turpis ligula. Aliquam quis blandit elit, ac sodales nisl. Aliquam eget dolor eget elit malesuada aliquet. In varius lorem lorem, semper bibendum lectus lobortis ac.</p>

                                                <p>Mauris placerat vitae lorem gravida viverra. Mauris in fringilla ex. Nulla facilisi. Etiam scelerisque tincidunt quam facilisis lobortis. In malesuada pulvinar neque a consectetur. Nunc aliquam gravida purus, non malesuada sem accumsan in. Morbi vel sodales libero.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <!-- <h2>Check out</h2> -->
                                                <div class="submit-review">
                                                    <p><label for="email">City</label> <input name="city" type="text"></p>
                                                    <p><label for="name">District </label> <input name="quan" type="text" placeholder="Quận/huyện"></p>
                                                    <p><label for="email">Address</label> <input name="diachi" type="text"></p>
                                                    <p><label for="name">Phone</label> <input name="phone" type="text"></p>

                                                    <p><label for="review">Note</label> <textarea name="note" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input name="submit" type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>