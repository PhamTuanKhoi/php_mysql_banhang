<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart Page - Ustora Demo</title>
    <!-- link lay tren mang -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"><script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->

    <link rel="stylesheet" href="../public/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../public/css/owl.carousel.css">
    <link rel="stylesheet" href="../public/css/tay.css">
    <link rel="stylesheet" href="../public/css/responsive.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="cart.html"><i class="fa fa-user"></i> My Cart</a></li>
                            <li><a href="checkout.html"><i class="fa fa-user"></i> Checkout</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">currency :</span><span class="value">USD </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">USD</a></li>
                                    <li><a href="#">INR</a></li>
                                    <li><a href="#">GBP</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">language :</span><span class="value">English </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">German</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/vertu.jpg"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Cart - <span class="cart-amunt">$800</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="shop.html">Shop page</a></li>
                        <li><a href="single-product.html">Single product</a></li>
                        <li class="active"><a href="cart.html">Cart</a></li>
                        <li><a href="checkout.html">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="#">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/product-thumb-1.jpg" class="recent-thumb" alt="">
                            <h2><a href="single-product.html">Sony Smart TV - 2015</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$700.00</ins> <del>$800.00</del>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                            <li><a href="#">Sony Smart TV - 2015</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                        <?php require_once "./mvc/view_home/pages/".$data["Page"].".php" ?>


                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                <h2>You may be interested in...</h2>
                                <ul class="products">
                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-2.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>

                                    <li class="product">
                                        <a href="single-product.html">
                                            <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-4.jpg">
                                            <h3>Ship Your Idea</h3>
                                            <span class="price"><span class="amount">£20.00</span></span>
                                        </a>

                                        <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                    </li>
                                </ul>
                            </div>


                            <div class="cart_totals ">
                                <h2>Cart Totals</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Cart Subtotal</th>
                                            <td><span class="amount">£15.00</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Order Total</th>
                                            <td><strong><span class="amount">£15.00</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>


                            <form method="post" action="#" class="shipping_calculator">
                                <h2><a class="shipping-calculator-button" data-toggle="collapse" href="#calcalute-shipping-wrap" aria-expanded="false" aria-controls="calcalute-shipping-wrap">Calculate Shipping</a></h2>

                                <section id="calcalute-shipping-wrap" class="shipping-calculator-form collapse">

                                <p class="form-row form-row-wide">
                                <select rel="calc_shipping_state" class="country_to_state" id="calc_shipping_country" name="calc_shipping_country">
                                    <option value="">Select a country…</option>
                                    <option value="AX">Åland Islands</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AO">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AQ">Antarctica</option>
                                    <option value="AG">Antigua and Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AM">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="PW">Belau</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                    <option value="BA">Bosnia and Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BV">Bouvet Island</option>
                                    <option value="BR">Brazil</option>
                                    <option value="IO">British Indian Ocean Territory</option>
                                    <option value="VG">British Virgin Islands</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CX">Christmas Island</option>
                                    <option value="CC">Cocos (Keeling) Islands</option>
                                    <option value="CO">Colombia</option>
                                    <option value="KM">Comoros</option>
                                    <option value="CG">Congo (Brazzaville)</option>
                                    <option value="CD">Congo (Kinshasa)</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CW">CuraÇao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FK">Falkland Islands</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="TF">French Southern Territories</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GG">Guernsey</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GW">Guinea-Bissau</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HM">Heard Island and McDonald Islands</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IR">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="CI">Ivory Coast</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JE">Jersey</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macao S.A.R., China</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="FM">Micronesia</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="ME">Montenegro</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Namibia</option>
                                    <option value="NR">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="NL">Netherlands</option>
                                    <option value="AN">Netherlands Antilles</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NU">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="KP">North Korea</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PS">Palestinian Territory</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PN">Pitcairn</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="QA">Qatar</option>
                                    <option value="IE">Republic of Ireland</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="ST">São Tomé and Príncipe</option>
                                    <option value="BL">Saint Barthélemy</option>
                                    <option value="SH">Saint Helena</option>
                                    <option value="KN">Saint Kitts and Nevis</option>
                                    <option value="LC">Saint Lucia</option>
                                    <option value="SX">Saint Martin (Dutch part)</option>
                                    <option value="MF">Saint Martin (French part)</option>
                                    <option value="PM">Saint Pierre and Miquelon</option>
                                    <option value="VC">Saint Vincent and the Grenadines</option>
                                    <option value="SM">San Marino</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="SO">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="GS">South Georgia/Sandwich Islands</option>
                                    <option value="KR">South Korea</option>
                                    <option value="SS">South Sudan</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SJ">Svalbard and Jan Mayen</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syria</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TL">Timor-Leste</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad and Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TM">Turkmenistan</option>
                                    <option value="TC">Turks and Caicos Islands</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option selected="selected" value="GB">United Kingdom (UK)</option>
                                    <option value="US">United States (US)</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VA">Vatican</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="WF">Wallis and Futuna</option>
                                    <option value="EH">Western Sahara</option>
                                    <option value="WS">Western Samoa</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                                </p>

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_state" name="calc_shipping_state" placeholder="State / county" value="" class="input-text"> </p>

                                <p class="form-row form-row-wide"><input type="text" id="calc_shipping_postcode" name="calc_shipping_postcode" placeholder="Postcode / Zip" value="" class="input-text"></p>


                                <p><button class="button" value="1" name="calc_shipping" type="submit">Update Totals</button></p>

                                </section>
                            </form>


                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Home accesseries</a></li>
                            <li><a href="#">LED TV</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. </p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
  </body>
</html>


<style>
    .floatleft { float: left }
.floatright { float: right }
.alignleft {
    float: left;
    margin-right: 15px;
}
.alignright {
    float: right;
    margin-left: 15px;
}
.aligncenter {
    display: block;
    margin: 0 auto 15px;
}
a:focus { outline: 0px solid }
img {
    max-width: 100%;
    height: auto;
}
.fix { overflow: hidden }
h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0 0 15px;
}
body { font-family:Arial, Helvetica, sans-serif; }



.header-area {
    background: none repeat scroll 0 0 #f4f4f4;
}
.header-area a {
    color: #888;
}
.user-menu ul {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.user-menu li {
    display: inline-block;
}
.user-menu li a {
    display: block;
    font-size: 13px;
    margin-right: 5px;
    padding: 10px;
}
.user-menu li a i.fa {
    margin-right: 5px;
}
.header-right ul.list-inline {
    margin: 0;
    text-align: right;
}
.header-right ul.list-inline li a {
    display: block;
    padding: 9px;
}
.header-right ul.list-inline li ul a {
    padding: 5px 15px;
}
.header-right ul.list-inline li ul {
    border: medium none;
    border-radius: 0;
    left: 50%;
    margin-left: -50px;
    min-width: 100px;
    text-align: center;
}

.mainmenu-area {background: none repeat scroll 0 0 #fbfbfb;
font-family: "Roboto Condensed",sans-serif;
text-transform: uppercase;
width: 100%;
z-index: 999;}



.logo h1 {
    font-size: 40px;
    margin: 30px 0;font-weight: 400;
}
.logo h1 a {
    color: #999;
}
.logo h1 a:hover {text-decoration: none;opacity: .7}
.logo h1 a span {
    color: #ee5057;
}
.shopping-item {
    border: 1px solid #ddd;
    float: right;
    font-size: 18px;
    margin-top: 40px;
    padding: 10px;
    position: relative;
}
.shopping-item a {
    color: #666;
}
.cart-amunt {
    color: #ee5057;
    font-weight: 700;
}
.logo{
  width: 30%;
}
.product-count {
    background: none repeat scroll 0 0 #ee5057;
    border-radius: 50%;
    color: #fff;
    display: inline-block;
    font-size: 10px;
    height: 20px;
    padding-top: 2px;
    position: absolute;
    right: -10px;
    text-align: center;
    top: -10px;
    width: 20px;
}
.shopping-item i.fa {
    margin-left: 15px;
}


.shopping-item:hover {
    background: none repeat scroll 0 0 #ee5057;
    border-color: #ee5057;
}
.shopping-item:hover a {
    color: #fff;text-decoration: none
}
.shopping-item:hover .cart-amunt {
    color: #fff;
}
.shopping-item:hover .product-count {
    background: none repeat scroll 0 0 #000;
}


.mainmenu-area ul.navbar-nav li a {
    color: #6e6a6a;
    font-size: 14px;
    padding: 20px;
}

.mainmenu-area ul.navbar-nav li:hover a, .mainmenu-area ul.navbar-nav li.active a {background: #ee5057; color:#FFF;}
.mainmenu-area .nav > li > a:focus {color: #FFF;}

.slider-area { width:80%; position:relative; margin:0 auto; padding:5px;}
/*-------------------------
[9. Block slider]
---------------------------*/
.block-slider{
	border:none;
	width: 100%;
}
.block-slider ul li{
	list-style: none;
}
.block-slider .bx-pager{
	display: none;
}
.block-slider .bx-prev,
.block-slider .bx-next{
	width: 32px;
	height: 32px;
	border: 1px solid #eaeaea;
	text-align: center;
	display: block;
	border-radius: 50%;
	font-size: 30px;
	position: absolute;
	top: 50%;
	-ms-transform: translateY(-50%);
	-webkit-transform: translateY(-50%);
	transform: translateY(-50%);
	line-height: 29px;
	-moz-transition: all 0.45s ease;
	-webkit-transition: all 0.45s ease;
	-o-transition: all 0.45s ease;
	-ms-transition: all 0.45s ease;
	transition: all 0.45s ease;
}
.block-slider img{
	width: 100%;
	height: auto;
}
.block-slider .bx-prev{
	left: 0px;
	padding-right: 3px;
}
.block-slider .bx-next{
	right: 0px;
	padding-left: 3px;
}
.block-slider:hover .bx-prev{
	left: 10px;
}
.block-slider:hover .bx-next{
	right: 10px;
}
.block-slider .bx-prev:hover,
.block-slider .bx-next:hover{
	background: #ee5057;
	color: #fff;
	border-color: #ee5057;
}

/*------------------
[4. Slidershow]
------------------*/

.block-slider .bx-pager{
	display: block;
    text-align: center;
}
.block-slider .bx-pager-item{
	width: 15px;
	height: 15px;
	background: #fff;
	font-size: 0;
	display: inline-block;
	border-radius: 50%;
	margin: 0 3px;
}
.block-slider .bx-pager-item a{
	width: 100%;
	height: 100%;
	background: #999;
	display: block;
	border-radius: 50%;
}
.block-slider .bx-pager-item a.active{
	background: #1bd172;
}
.block-slider .caption-group{
	position: absolute;
    top: 26%;
    right: 16%;
}
.block-slider .caption-group .title{
	margin: 0;
}
.block-slider .caption-group .subtitle{
	margin: 0;
	margin-top: 5px;
}
.block-slider .caption-group .button-radius{
	margin-top: 27px;
}
.block-slider .caption-group .primary{
	color: #1bd172;
}
.block-slider .caption-group .caption{

}

/*----------------------
[10. Block top seller ]
------------------------*/
.button-radius{
  position: relative;
  border: 1px solid #eaeaea;
  padding: 1px;
  min-height: 34px;
  background: #fff;
  display: inline-block;
  width: auto;
  line-height: 30px;
  padding-left: 40px;
  padding-right: 20px;
  margin: 0;
  color: #666666;
  -webkit-border-radius: 17px;
  -moz-border-radius: 17px;
  border-radius: 17px;
  -webkit-transition: all 1s ease;
  -moz-transition: all 1s ease;
  -o-transition: all 1s ease;
  -ms-transition: all 1s ease;
  transition: all 1s ease;
  margin-top: 10px;
  font-size: 14px;
}
.button-radius .icon{
  -webkit-transition: all 1s ease-out;
  -moz-transition: all 1s ease-out;
  -o-transition: all 1s ease-out;
  -ms-transition: all 1s ease-out;
  transition: all 1s ease-out;
  position: absolute;
  left: 2%;
  top: 2px;
  overflow: hidden;
}

.button-radius .icon:before{
  font-family: 'FontAwesome';
  content: "\f105";
  font-size: 14px;
  color: #fff;
  width: 28px;
  height: 28px;
  background-color: #ee5057;
  border-radius: 90%;
  text-align: center;
  line-height: 26px;
  float: left;
  -webkit-transition: all 1s ease-out;
  -moz-transition: all 1s ease-out;
  -o-transition: all 1s ease-out;
  -ms-transition: all 1s ease-out;
  transition: all 1s ease-out;
}

.button-radius.white{
  border-color: #fff;
  color: #fff;
  background: transparent;
}
.button-radius.white .icon:before{
  background: #fff;
  color: #333;
}

.button-radius:hover .icon{
  left: 100%;
  margin-left: -30px;
}
.button-radius:hover{
  padding-left: 20px;
  padding-right: 40px;
}

.promo-area {
  background:#fbfbfb;
  color: #fff;
  padding: 40px 0 40px;
}

.brands-area {
  border-top:1px solid #e5e5e5;
  border-bottom:1px solid #e5e5e5;
  color: #fff;
  padding: 20px 0 20px;
}

.promo-area .zigzag-bottom, .brands-area .zigzag-bottom{background: #f4f4f4}
.single-promo {
    font-size: 25px;
    font-weight: 200;
    padding: 20px 10px;
    text-align: center;
}
.single-promo i {
  font-size: 50px;
}

.single-promo:hover {color: #fff;background: #222;}
.promo1 { background:#ee5057;}
.promo2 { background:#ffd900;}
.promo3 { background:#fa8072;}
.promo4 { background:#4abebd;}
.section-title {
  font-family: "Raleway",sans-serif;
  font-size: 50px;
  font-weight: 100;
  margin-bottom: 50px;
  text-align: center;
}


.product-f-image {
    position: relative;
}
.product-hover {
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;overflow: hidden;border: 1px solid #ddd;
}
.product-hover:after {
  background: none repeat scroll 0 0 #000;
  content: "";
  height: 100%;
  left: -100%;
  opacity: 0.6;
  position: absolute;
  top: 0;
  width: 100%;transition: .4s;
}
.product-hover a {
    background: none repeat scroll 0 0 #ee5057;
    border-radius: 5px;
    color: #fff;
    display: block;
    font-size: 16px;
    left: 10%;
    margin: 0;
    padding: 10px;
    position: absolute;
    text-align: center;
    text-transform: uppercase;
    border: 1px solid #ee5057;
    width: 80%;z-index: 99;transition: .4s;
}
.product-hover a:hover {
  background: #000;
  text-decoration: none;border-color: #444;
}
.product-carousel-price ins {
  color: #ee5057;
  font-weight: 700;
  margin-right: 5px;
  text-decoration: none;
}
.product-hover a i.fa {
    margin-right: 5px;
}
.product-hover a.add-to-cart-link {top: -25%;}
.product-hover a.view-details-link { bottom: -25%;}
.single-product h2 {
    font-size: 18px;
    line-height: 25px;
    margin-bottom: 10px;
    margin-top: 15px;
}


.single-product h2 a {
    color: #222;
}
.single-product p {
    color: #ee5057;
    font-weight: 700;
}

.single-product {
  overflow: hidden;
}
.single-product:hover {}
.single-product:hover .product-hover a.add-to-cart-link {top: 32%;}
.single-product:hover .product-hover a.view-details-link {bottom: 32%;}
.single-product:hover .product-hover:after{left: 0}


.product-carousel {
  padding-top: 40px;
}
.latest-product .owl-nav {
  position: absolute;
  right: 0;
  top: 0;
}

.latest-product .owl-nav div, .related-products-wrapper .owl-nav div {
  background:#fa8072;
  color:#FFF;
  display: inline-block;
  margin-left: 15px;
  padding: 1px 10px;
}
.latest-product .owl-nav div:hover, .brand-wrapper .owl-nav div:hover, .related-products-wrapper .owl-nav div:hover {color: #FFF; background:#f95f5f;}
.brand-list {padding-top: 40px;}
.brand-list .owl-nav {
  position: absolute;
  right: 0;
  top: 0;
}
.brand-wrapper .owl-nav div {
  border: 1px solid #fff;
  color: #fff;
  display: inline-block;
  margin-left: 15px;
  padding: 1px 10px;
}

.brand-wrapper .owl-nav div {
  background:#fa8072;
  color:#FFF;
  display: inline-block;
  margin-left: 15px;
  padding: 1px 10px;
}

.maincontent-area {padding-bottom: 50px; padding-top:20px;}

.product-wid-title {
  font-family: raleway;
  font-size: 30px;
  font-weight: 100;
  margin-bottom: 40px;
}


.single-wid-product {
    margin-bottom: 31px;
    overflow: hidden;
}
.product-thumb {
    float: left;
    height: 90px;
    margin-right: 15px;
    width: 100px;
}
.single-wid-product h2 {
    font-size: 14px;
    margin-bottom: 12px;
}
.product-wid-rating {
    color: #ffc808;
    margin-bottom: 10px;
}
.product-wid-price ins {
    color: #ee5057;
    font-weight: 700;
    margin-right: 10px;
    text-decoration: none;
}
.single-wid-product h2 a {
    color: #222;
}
.single-wid-product h2 a:hover, .single-product h2 a:hover {
    color: #ee5057;
}
.wid-view-more {
    background: none repeat scroll 0 0 #ee5057;
    color: #fff;
    padding: 3px 15px;
    position: absolute;
    right: 10px;
    top: 3px;
}
.wid-view-more:hover {color: #fff;background-color: #222;text-decoration: none}
.single-product-widget {
    position: relative;
}
.product-widget-area {
  padding-bottom: 30px;
  padding-top: 30px;
}
.product-widget-area .zigzag-bottom{background: #f4f4f4;}
.footer-top-area .zigzag-bottom{background: #f4f4f4}
.footer-top-area {background: none repeat scroll 0 0 #333;
color: #999;
padding: 35px 0 180px;}


.footer-bottom-area {background: #000;color: #fff}
.footer-about-us span {
  color: #ee5057;
}
.footer-wid-title {
  font-family: raleway;
  font-size: 30px;
  font-weight: 100;color: #fff
}

.footer-about-us h2 {
  font-weight: 200;
}
.footer-menu ul {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.footer-menu ul li {
    border-bottom: 1px dashed #555;
    padding: 5px 0;
}
.footer-menu a {
    display: block;
    padding: 5px 0;color: #999
}


.footer-social a {
  background: none repeat scroll 0 0 #ee5057;
  color: #fff;
  display: inline-block;
  font-size: 20px;
  height: 40px;
  margin-bottom: 10px;
  margin-right: 10px;
  padding-top: 5px;
  text-align: center;
  width: 40px;border: 1px solid #ee5057;
}

.footer-social a:hover {background-color: #222;border-color: #666}

.footer-social {margin-top: 20px}


.newsletter-form input[type="email"] {
    background: none repeat scroll 0 0 #fff;
    border: medium none;
    margin-bottom: 10px;
    padding: 10px;
    width: 100%;
}
.newsletter-form input[type="submit"] {
    background: none repeat scroll 0 0 #ee5057;
    border: medium none;
    color: #fff;
    display: inline-block;
    font-size: 18px;
    padding: 7px 20px;
    text-transform: uppercase;border: 1px solid #ee5057;
}
.newsletter-form input[type="submit"]:hover {background: #222;border-color: #666}
.newsletter-form {
    margin-top: 25px;
}
a {color: #ee5057}
a:hover, a:focus {color: #17a78b}
.footer-bottom-area {
  background: none repeat scroll 0 0 #000;
  color: #fff;
  padding-bottom: 40px;
}


.slide-bulletz {
    bottom: 30px;
    left: 0;
    position: absolute;
    text-align: center;
    width: 100%;
    z-index: 99;
}
ol.slide-indicators {
left: inherit;
list-style: outside none none;
margin: 0;
padding: 0;
position: relative;
width: 100%;
}
ol.slide-indicators li {
background: none repeat scroll 0 0 #222;
border: medium none;
border-radius: 0;
cursor: pointer;
display: inline-block;
height: 10px;
margin: 0 0 0 5px;
width: 10px;
}
ol.slide-indicators li.active {
background: none repeat scroll 0 0 #fff;
height: 10px;
margin: 0 0 0 5px;
width: 10px;
}


.carousel.carousel-fade .item { transition: opacity 1s ease-in-out }
.carousel.carousel-fade .active.left,
.carousel.carousel-fade .active.right {
    left: 0;
    z-index: 2;
    opacity: 0;
    filter: alpha(opacity=0);
}

.footer-card-icon {
  font-size: 30px;
  text-align: right;
}

.copyright > p {
  margin: 10px 0 0;
}

.product-big-title-area {background: url(img/crossword.png) repeat scroll 0 0 #ee5057}

.product-bit-title h2 {
  font-family: raleway;
  font-size: 50px;
  font-weight: 200;
  margin: 0;
  padding: 50px 0;color: #fff;
}

.single-product-area .zigzag-bottom {background-color: #f4f4f4}

.single-product-area {
  padding: 80px 0 130px;
}





.sidebar-title {
    color: #fead53;
    font-size: 25px;
    margin-bottom: 30px;
    text-transform: uppercase;
}
.single-sidebar {
    margin-bottom: 50px;
}
input[type="text"], input[type="password"], input[type="email"], textarea {
    border: 1px solid #ddd;
    padding: 10px;
}
input[type="submit"], button[type=submit] {
    background: none repeat scroll 0 0 #ee5057;
    border: medium none;
    color: #fff;
    padding: 11px 20px;
    text-transform: uppercase;
}
input[type="submit"]:hover, button[type=submit]:hover {background-color: #222}
.single-sidebar input[type="text"] {
    margin-bottom: 10px;
    width: 100%;
}
.thubmnail-recent {
    margin-bottom: 30px;
    overflow: hidden;
}
.recent-thumb {
    float: left;
    height: auto;
    margin-right: 15px;
    width: 63px;
}
.thubmnail-recent > h2 {
    font-size: 20px;
    margin-bottom: 10px;
}
.thubmnail-recent > h2 a {
    color: #222;
}
.product-sidebar-price > ins {
    color: #ee5057;
    font-weight: 700;
    margin-right: 10px;
    text-decoration: none;
}
.single-sidebar > ul {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.single-sidebar li {
    border-bottom: 1px solid #f1f1f1;
    padding: 10px 0;
}
.single-sidebar a {
    display: block;
}
.product-breadcroumb {
    margin-bottom: 20px;
}
.product-breadcroumb > a {
    margin-right: 31px;
    position: relative;
}
.product-breadcroumb > a::before {
    content: "/";
    position: absolute;
    right: -20px;
    top: 2px;
}
.product-breadcroumb > a:last-child::before {
    display: none;
}
.product-main-img {
    margin-bottom: 20px;
}
.product-gallery {
    margin-bottom: 25px;
    margin-left: -15px;
    overflow: hidden;
}
.product-gallery img {
    height: auto;
    margin-left: 15px;
    width: 76px;
}
.product-name {
    font-size: 25px;
    margin-bottom: 20px;
}
.product-inner-price {
    margin-bottom: 25px;
}
.product-inner-price > ins {
    color: #ee5057;
    font-weight: 700;
    margin-right: 10px;
    text-decoration: none;
}
.quantity {
    float: left;
    margin-right: 15px;
}
.quantity input[type="number"] {
    border: 1px solid #ee5057;
    padding: 5px;
    width: 50px;
}
.add_to_cart_button {
    background: none repeat scroll 0 0 #ee5057;
    border: medium none;
    color: #fff;
    padding: 6px 25px;display: inline-block
}
.add_to_cart_button:hover {background-color: #222;color: #fff;text-decoration: none}
form.cart {
    margin-bottom: 25px;
}
.product-inner-category {
    margin-bottom: 30px;
}
.product-tab {
    border-bottom: 1px solid #ddd;
    list-style: outside none none;
    margin: 0 0 30px;
    padding: 0;
    text-align: center;
}
.product-tab li {
    display: inline-block;
}
.product-tab li.active {
    background: none repeat scroll 0 0 #ee5057;
}
.product-tab li.active a {
    color: #fff;
}
.product-tab li a {
    color: #222;
    display: block;
    font-size: 16px;
    padding: 10px 30px;
}
.product-tab li a:hover {
    text-decoration: none;
}
.product-tab li a:focus {
    text-decoration: none;
}
.tab-content h2 {
    font-size: 20px;
}
.tab-content {
    margin-bottom: 30px;
}
.submit-review label {
    display: block;
}
.submit-review input[type="text"], .submit-review input[type="email"], .submit-review textarea {
    margin-bottom: 20px;
    width: 100%;
}
.rating-chooser {
    margin-bottom: 30px;
}
.rating-chooser p {
    font-weight: 700;
}
.rating-wrap-post {
    font-size: 20px;
}

.submit-review textarea {
    height: 105px;
}

.related-products-wrapper {
  margin-top: 30px;
}
.related-products-title {color: #feae52;
font-size: 25px;
margin-bottom: 30px;
text-transform: uppercase;}

.related-products-wrapper .owl-nav {
  position: absolute;
  right: 0;
  top: -56px;
}



table.shop_table {
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
    margin-bottom: 50px;
    width: 100%;
}
table.shop_table th, table.shop_table td {
    border-left: 1px solid #ddd;
    border-top: 1px solid #ddd;
    padding: 15px;
    text-align: center;
}
table.shop_table th {
    background: none repeat scroll 0 0 #f4f4f4;
    font-size: 15px;
    text-transform: uppercase;
}
td.product-thumbnail img {
    height: auto;
    width: 70px;
}
td.product-name {
    font-size: 18px;
}
div.quantity input.plus, div.quantity input.minus {
    background: none repeat scroll 0 0 #ee5057;
    border: medium none;
    color: #fff;
    height: 25px;
    line-height: 15px;
    width: 25px;
}
td.product-quantity div.quantity {
    float: none;
    margin: 0;
}
td.actions div.coupon {
    float: left;
}
.cart-collaterals {
    overflow: hidden;
}
.cross-sells {
    float: left;
    margin-right: 3%;
    width: 57%;
}
.cart_totals {
    float: right;
    margin-bottom: 50px;
    width: 40%;
}
.cart-collaterals h2 {
    color: #ee5057;
    font-size: 25px;
    margin-bottom: 25px;
    text-transform: uppercase;
}
div.cart-collaterals ul.products {
    list-style: outside none none;
    margin: 0 0 0 -30px;
    padding: 0;
}
div.cart-collaterals ul.products li.product {
    float: left;
    margin-left: 30px;
    position: relative;
    width: 198px;
}
.cart_totals table {
    border-bottom: 1px solid #ddd;
    border-right: 1px solid #ddd;
    width: 100%;
}
.cart_totals table th, .cart_totals table td {
    border-left: 1px solid #ddd;
    border-top: 1px solid #ddd;
    padding: 10px;
}
.cart_totals table th {
    background: none repeat scroll 0 0 #f4f4f4;
}
.onsale {
}
div.cart-collaterals ul.products li.product .onsale {
    background: none repeat scroll 0 0 #ee5057;
    color: #fff;
    padding: 5px 10px;
    position: absolute;
    right: 0;
}
div.cart-collaterals ul.products li.product h3 {
    color: #333;
    font-size: 20px;
    margin-top: 15px;
}
div.cart-collaterals ul.products li.product .price {
    color: #333;
    display: block;
    margin-bottom: 10px;
    overflow: hidden;
}
.price > ins {
}
div.cart-collaterals ul.products li.product .price ins {
    color: #ee5057;
    font-weight: 700;
    margin-left: 10px;
    text-decoration: none;
}



.woocommerce-info {
    background: none repeat scroll 0 0 #f4f4f4;
    font-size: 18px;
    margin-bottom: 20px;
    padding: 15px;
}
.col2-set {
    margin-left: -30px;
    overflow: hidden;
}
.col-1, .col-2 {
    float: left;
    margin-left: 30px;
    width: 360px;
}
#customer_details label {
    display: block;
    margin: 0 0 5px;
}
#customer_details input[type="text"], #customer_details textarea, .shipping_calculator input[type=text] {
    margin-bottom: 10px;
    width: 100%;
}
#customer_details h3 {
    color: #ee5057;
    font-size: 20px;
    text-transform: uppercase;
}
.create-account {
    background: none repeat scroll 0 0 #f4f4f4;
    margin-bottom: 50px;
    padding: 15px;
}
#order_review_heading {
    color: #ee5057;
    font-size: 20px;
    text-transform: uppercase;
}
#payment ul.payment_methods {
    list-style: outside none none;
    margin: 0 0 30px;
    padding: 0;
}
#payment ul.payment_methods li {
    margin-bottom: 15px;
}
a.about_paypal {
    font-size: 12px;
    margin-left: 15px;
}


#customer_details select, .shipping_calculator select {
  border: 1px solid #ddd;
  margin-bottom: 15px;
  padding: 10px;
  width: 100%;
}


table.shop_table td.product-remove a {
  display: inline-block;
  padding: 0 5px 2px;
  text-transform: uppercase;
}


table.shop_table td.product-remove a:hover {color: #fff;background: red;text-decoration: none}
table.shop_table td.product-name a{color: #222;}
table.shop_table td.product-name a:hover {color: #ee5057;text-decoration: none}
div.quantity input.plus:hover, div.quantity input.minus:hover {background-color: #222}
div.cart-collaterals ul.products li.product a:hover h3 {color: #ee5057}
div.cart-collaterals ul.products li.product a:hover {text-decoration: none}

div.cart-collaterals ul.products li.product:hover .add_to_cart_button{background-color: #222}


.cart-collaterals .shipping_calculator {
  float: right;
  width: 40%;
}


#login-form-wrap, #coupon-collapse-wrap {
    background: none repeat scroll 0 0 #f4f4f4;
    margin-bottom: 30px;
    padding: 25px;
}
#login-form-wrap label {
    display: block;
    margin-bottom: 5px;
}
#login-form-wrap input[type="text"], #login-form-wrap input[type="password"] {
    margin-bottom: 10px;
    width: 250px;
}
#login-form-wrap input[type="submit"] {
    margin-bottom: 15px;
}



.single-shop-product h2 {
    font-size: 20px;
    margin: 10px 0;
}
.product-option-shop {
    margin-top: 15px;
}

.single-shop-product {margin-bottom: 50px}

.pagination > li > a, .pagination > li > span {
  color: #ee5057;
}
</style>