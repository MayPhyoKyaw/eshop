<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='copyright' content=''>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title Tag  -->
    <title>Eshop - eCommerce HTML5 Template.</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <!-- Web Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <!-- StyleSheet -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="css/magnific-popup.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <!-- Fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <!-- Themify Icons -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="css/niceselect.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Flex Slider CSS -->
    <link rel="stylesheet" href="css/flex-slider.min.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="css/owl-carousel.css">
    <!-- Slicknav -->
    <link rel="stylesheet" href="css/slicknav.min.css">

    <!-- Eshop StyleSheet -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- customize design css -->
    <link rel="stylesheet" href="css/design.css">

</head>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->



    <!-- Header -->
    <header class="header shop">
        <!-- Topbar -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">
                        <!-- Top Left -->
                        <div class="top-left">
                            <ul class="list-main">
                                <li><i class="ti-headphone-alt"></i> <a href="tel:+070 (8001) 8011-5822">+070 (8001) 8011-5822</a></li>
                                <li><i class="ti-email"></i> <a href="mailto:support@charmclo.com" target="_blank">support@charmclo .com</a></li>
                            </ul>
                        </div>
                        <!--/ End Top Left -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <!-- Top Right -->
                        <div class="right-content">
                            <ul class="list-main">
                                <li><i class="ti-location-pin"></i> <a href="contact.php">Store location</a></li>
                            </ul>
                        </div>
                        <!-- End Top Right -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Topbar -->
        <div class="middle-inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-12">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.php"><img class="main-logo" src="images/charmclo_logo2.png" alt="logo"></a>
                        </div>
                        <!--/ End Logo -->
                        <!-- Search Form -->
                        <div class="search-top">
                            <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                            <!-- Search Form -->
                            <div class="search-top">
                                <form class="search-form">
                                    <input type="text" placeholder="Search here..." name="search">
                                    <button value="search" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                            <!--/ End Search Form -->
                        </div>
                        <!--/ End Search Form -->
                        <div class="mobile-nav"></div>
                    </div>
                    <div class="col-lg-8 col-md-7 col-12">
                        <div class="search-bar-top">
                            <div class="search-bar">
                                <select>
									<option selected="selected">探す</option>
                                        <option>ブランドから探す</option>
                                        <option>春用で探す</option>
                                        <option>夏用で探す</option>
                                        <option>秋用で探す</option>
                                        <option>冬用で探す</option>
								</select>
                                <!-- <form> -->
                                <input name="search" placeholder="Search Products Here....." type="search">
                                <button class="btnn search-btn"><i class="ti-search"></i></button>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-12">
                        <div class="right-bar">
                            <!-- Search Form -->
                            <!-- <div class="sinlge-bar">
                                <a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="sinlge-bar shopping">
                                <a href="#" class="single-icon"><i class="ti-bag"></i> <span class="total-count">2</span></a>
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>
                                        <a href="#">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                            <h4><a href="cart.php">Woman Ring</a></h4>
                                            <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                        </li>
                                        <li>
                                            <a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
                                            <h4><a href="cart.php">Woman Necklace</a></h4>
                                            <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                        </li>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$134.00</span>
                                        </div>
                                        <a href="checkout.php" class="btn animate">Checkout</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php 
            include_once 'db_connection.php';
        ?>
        <!-- Header Inner -->
        <div class="header-inner">
            <div class="container">
                <div class="cat-nav-head">
                    <div class="row">
                        <div class="col-lg-3">
                            <div id="all_Category" class="all-category">
                                <h3 class="cat-heading" id="toggle"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
                                <ul id="main_Category" class="main-category" style="display: none;">
                                <?php 
                                        try {
                                            $database = new Connection();
                                            $dbConn = $database->openConnection();
                                            $mainCat_sql = "SELECT * FROM b_category" ;
                                            $st1 = $dbConn->prepare($mainCat_sql);
                                            $st1->execute();
                                            $mainCat = array();
                                            $i = 0;
                                            foreach ($st1->fetchAll() as $row1) {
                                    ?>
                                        <li><span class="main-categoryName"><?php echo $row1['b_catName']; ?><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                            <?php 
                                                $mainCat = $row1['b_categoryID'];
                                                $subCat_sql = "SELECT b_categoryID, GROUP_CONCAT(s_catName) FROM s_category WHERE b_categoryID = :mainCat GROUP BY b_categoryID";
                                                $st2 = $dbConn->prepare($subCat_sql);
                                                $st2->bindParam( ":mainCat", $mainCat, PDO::PARAM_STR);
                                                $st2->execute();
                                                $subCatArray = array();
                                                foreach ($st2->fetchAll() as $row2) {
                                                    $subCatName = $row2['GROUP_CONCAT(s_catName)'];
                                                    $subCatArray = explode(",", $subCatName);
                                                    $i = 0;
                                            ?>
                                                <ul class="sub-category">
                                                    <?php while($i < Count($subCatArray)){ ?>
                                                        <a href="shop-grid.php?large_category=<?php echo $row1['b_catName']; ?>&small_category=<?php echo $subCatArray[$i]; ?>">
                                                            <li><span class="sub-categoryName"><?php echo $subCatArray[$i]; ?></span></li>
                                                        </a>
                                                    <?php $i++;  } ?>
                                                </ul>
                                            <?php 
                                                }
                                            ?>
                                        </li>
                                    <?php 
                                            } 
                                        }catch (PDOException $e) {
                                            echo "There is some problem in connection: " . $e->getMessage();
                                        }
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9 col-12">
                            <div class="menu-area">
                                <!-- Main Menu -->
                                <nav class="navbar navbar-expand-lg">
                                    <div class="navbar-collapse">
                                        <div class="nav-inner">
                                            <ul class="nav main-menu menu navbar-nav">
                                                <li class="active"><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="cart.php">My Cart</a></li>
                                                <li><a href="#">Services<i class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        <li><a href="cart.php">My Cart</a></li>
                                                        <li><a href="checkout.php">Order History</a></li>
                                                    </ul>
                                                </li>

                                                <li><a href="sale-shop-grid.php">Sales<span class="new">New</span></a>
                                                </li>
                                                <li><a href="contact.php">Contact Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </nav>
                                <!--/ End Main Menu -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Header Inner -->
    </header>
    <!--/ End Header -->

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                        <li><a href="index.php">Home</a></li>
                            <!-- <li class="active"><a href="payment.php">Payment</a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head">
                <div class="row">
                    <div class="col-lg-16 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h4>ご注文内容の確認</h4>
                            </div>
                            <div class="card bg-light payment-form">
                                <article class="card-body payment-article">
                                    <p class="important-note">　※　ご注文内容を確認してください</p><br/>
                                    <div class="convini-type">
                                        <div class="convini-head"><label><h3> オーダー <span class="important-note">(コンビニ)</span></h3></label></div>
                                        <!-- <div class="grid-container">
                                            <div class="grid-item">お客様名前</div>
                                            <div class="grid-item convini-conf-name"></div>
                                            <div class="grid-item">お支払い金額</div>
                                            <div class="grid-item convini-conf-amount"></div>
                                            <div class="grid-item">お支払い期間</div>
                                            <div class="grid-item convini-conf-date"></div>
                                            <div class="grid-item">お支払い方法</div>
                                            <div class="grid-item convini-conf-method"></div>
                                            <div class="grid-item">お支払い内容</div>
                                            <div class="grid-item convini-conf-description"></div>
                                        </div> -->
                                        <div class="convini-conf-grid-container">
                                            <div class="grid-item">書名</div>
                                            <div class="grid-item">単価</div>
                                            <div class="grid-item">個数</div>
                                            <div class="grid-item">金額</div>
                                            <div class="grid-item"></div>
                                            <?php
                                                $c_code = $_SESSION['cusCode'];
                                                $total_amount = $_SESSION['final_amount'];
                                                $deliTime = $_SESSION['deliTime'];
                                                $deliDate = $_SESSION['deliDate'];
                                                $itemID_arr = array();
                                                $qty_arr = array();
                                                try {
                                                    $order_item_sql = "SELECT c.item_id, item_name, price, quantity, (price*quantity) as amount FROM item i INNER JOIN cart c ON i.item_id = c.item_id WHERE c.c_code = ?";
                                                    $st4 = $dbConn->prepare($order_item_sql);
                                                    // $st4->bindParam( ":c_code", $c_code, PDO::PARAM_INT);
                                                    $st4->execute([$c_code]);
                                                    foreach ($st4->fetchAll() as $row4) {
                                                        array_push($itemID_arr, $row4['item_id']);
                                                        array_push($qty_arr, $row4['quantity']);
                                            ?>
                                                <div class="grid-item"><?php echo $row4['item_name']; ?></div>
                                                <div class="grid-item"><?php echo "￥" . number_format($row4['price']); ?></div>
                                                <div class="grid-item"><?php echo $row4['quantity']; ?></div>
                                                <div class="grid-item"><?php echo "￥" . number_format($row4['amount']); ?></div>
                                                <div class="grid-item">
                                                <form action="deleteFromCart_forConbiniPayment.php" method="post">
                                                    <input type="hidden" name="item_id" value="<?php echo $row4['item_id'] ?>" />
                                                    <input type="hidden" name="convini" value="<?php echo $_GET['convini'] ?>" />
                                                    <button type="submit" class="btn btn-primary delete-btn" name="delete">削除</button>
                                                </form>
                                                </div>
                                            <?php
                                                    } 
                                                }catch (PDOException $e) {
                                                    echo "There is some problem in connection: " . $e->getMessage();
                                                }
                                            ?>
                                            <span class="credit-conf-description">合計金額 : <?php echo "￥" . $total_amount; ?></span>
                                        </div>
                                        
                                        <?php 
                                            $cName = null; 
                                            $cPhone = null;
                                            $cAddress1 = null;
                                            $cAddress2 = null;
                                            $postalCode = null;
                                            $cusEmail = null;
                                            $total_qty = 0;
                                            try {
                                                $customer_sql = "SELECT c_name, c_address1, c_address2, c_phone, c_zip, c_email, Sum(quantity) as totalQty FROM customers cus INNER JOIN cart c ON cus.c_code = c.c_code INNER JOIN item i ON c.item_id = i.item_id WHERE c.c_code = ?";
                                                $st3 = $dbConn->prepare($customer_sql);
                                                // $st3->bindParam( ":c_code", , PDO::PARAM_INT);
                                                $st3->execute(array($c_code));
                                                foreach ($st3->fetchAll() as $row3) {
                                                    $cName = $row3['c_name']; 
                                                    $cPhone = $row3['c_phone'];
                                                    $cAddress1 = $row3['c_address1'];
                                                    $cAddress2 = $row3['c_address2'];
                                                    $postalCode = $row3['c_zip'];
                                                    $cusEmail = $row3['c_email'];
                                                    $total_qty = $row3['totalQty'];
                                                } 
                                            }catch (PDOException $e) {
                                                echo "There is some problem in connection: " . $e->getMessage();
                                            }
                                        ?>
                                        <div>
                                            <span class="credit-conf-description-title">．配送先</span> <br/>
                                            <span class="credit-conf-description">郵便番号 :</span> <?php echo $postalCode; ?> <br/>
                                            <span class="credit-conf-description">住所 :</span> <?php echo $cAddress1; ?> <br/>
                                            <span class="credit-conf-description">電話番号 :</span> <?php echo $cPhone; ?> <br/>
                                            <?php 
                                                try {
                                                    $deli_time_query = "SELECT deli_time FROM delivery_times WHERE deli_code = ?";
                                                    $deli_st = $dbConn->prepare($deli_time_query);
                                                    $deli_st->execute(array($deliTime));
                                                    foreach ($deli_st->fetchAll() as $row5) {
                                            ?>
                                            <span class="credit-conf-description">配送時間 :</span> <?php echo $row5['deli_time']; ?> <br/>
                                            <?php  
                                                    } 
                                                }catch (PDOException $e) {
                                                    echo "There is some problem in connection: " . $e->getMessage();
                                                }
                                            ?>
                                            <span class="credit-conf-description">配送日 :</span> <?php echo $deliDate; ?>  <br/>
                                            <span class="convini-conf-description-title">．支払方法</span> <br/>
                                            <span class="convini-conf-description convini-conf-method"></span> <br/>
                                            <span class="convini-conf-description space">支払い期間 : <span class="convini-conf-date"></span></span> <br/>
                                            <!-- <span class="convini-conf-description space" >&nbsp;&nbsp;<span class="important-note">※　クレジットカード会社によって支払い日が異なりますので、各クレジットカード会社のウェブサイトにてご確認ください</span></span> -->
                                        </div>
                                    </div>
                                </article>
                                <div class="back-btn convini-payment-btns">
                                    <form action="add_ordering_forConbiniPayment.php" method="post">
                                        <button type="button" class="btn btn-secondary" onclick="goBack()">戻る</button>
                                        <input type="hidden" name="c_code" value="<?php echo $c_code; ?>" />
                                        <input type="hidden" name="c_phone" value="<?php echo $cPhone; ?>" />
                                        <input type="hidden" name="c_address1" value="<?php echo $cAddress1; ?>" />
                                        <input type="hidden" name="c_address2" value="<?php echo $cAddress2; ?>" />
                                        <input type="hidden" name="c_email" value="<?php echo $cusEmail; ?>" />
                                        <input type="hidden" name="c_name" value="<?php echo $cName; ?>" />
                                        <input type="hidden" name="sum_qty" value="<?php echo $total_qty; ?>" />
                                        <input type="hidden" name="total_amount" value="<?php echo $total_amount; ?>" />
                                        <input type="hidden" name="deliTime" value="<?php echo $deliTime; ?>" />
                                        <input type="hidden" name="deliDate" value="<?php echo $deliDate; ?>" />
                                        <?php foreach($itemID_arr as $id){ ?>
                                            <input type="hidden" name="itemIDs[]" value="<?php echo $id; ?>" />
                                        <?php 
                                              }
                                            foreach($qty_arr as $qty){ 
                                        ?>
                                            <input type="hidden" name="quantities[]" value="<?php echo $qty; ?>" />
                                        <?php } ?>
                                        <button type="submit" name="add_ordering" id="credit_payment_conf" class="btn btn-secondary card-submit" data-toggle="modal" data-target="#credit_payment_confirmation">注文する</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Contact -->

    <!-- start conivini payment confirmation modal -->
    <div class="modal fade" id="convini_payment_confirmation" tabindex="-1" role="dialog" aria-labelledby="cardConfirmation" aria-hidden="true">
        <div class="modal-dialog card-confirm-customize-modal-dialog" role="document">
            <div class="modal-content card-confirm-customize-modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body card-confirm-customize-modal-body">
                    <div>
                        <h3 class="modal-title">ご注文完了</h3>
                    </div>
                    <div class="card bg-light card-form">
                        <h3 class="card-detail">ご注文ありがとうございます</h3>
                        <p>Test1</p>
                        <p>Test2</p>
                        <p>Test3</p>
                        <div class="thank-gif">
                            <img src="./images/PDECOPOCHI01003.gif">
                        </div>
                    </div>
                    <!-- card.// -->

                </div>
                <div class="modal-footer">
                    <a href="mycart.php"><button type="submit" class="btn ">完了</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end conivini payment confirmation modal -->

    <!-- Start Footer Area -->
    <footer class="footer">
        <!-- Footer Top -->
        <div class="footer-top section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer about">
                            <div class="logo">
                                <a href="index.php"><img class="main-logo" src="images/charmclo_logo2.png" alt="#"></a>
                            </div>
                            <p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
                            <p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-2 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer links">
                            <h4>Customer Service</h4>
                            <ul>
                                <li><a href="about.php">Payment Methods</a></li>
                                <li><a href="about.php">Money-back</a></li>
                                <li><a href="about.php">Returns</a></li>
                                <li><a href="about.php">Shipping</a></li>
                                <li><a href="about.php">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer social">
                            <h4>Contact us</h4>
                            <!-- Single Widget -->
                            <div class="contact">
                                <ul>
                                    <li>NO. 342 - London Oxford Street.</li>
                                    <li>012 United Kingdom.</li>
                                    <li>info@eshop.com</li>
                                    <li>+032 3456 7890</li>
                                </ul>
                            </div>
                            <!-- End Single Widget -->
                            <ul>
                                <li><a href="#"><i class="ti-facebook"></i></a></li>
                                <li><a href="#"><i class="ti-twitter"></i></a></li>
                                <li><a href="#"><i class="ti-flickr"></i></a></li>
                                <li><a href="#"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Top -->
        <div class="copyright">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="left">
                                <p>Copyright © 2020 - All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="right">
                                <img src="images/payments.png" alt="#">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /End Footer Area -->



    <!-- Jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!-- Popper JS -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Color JS -->
    <script src="js/colors.js"></script>
    <!-- Slicknav JS -->
    <script src="js/slicknav.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="js/owl-carousel.js"></script>
    <!-- Magnific Popup JS -->
    <script src="js/magnific-popup.js"></script>
    <!-- Fancybox JS -->
    <script src="js/facnybox.min.js"></script>
    <!-- Waypoints JS -->
    <script src="js/waypoints.min.js"></script>
    <!-- Jquery Counterup JS -->
    <script src="js/jquery-counterup.min.js"></script>
    <!-- Countdown JS -->
    <script src="js/finalcountdown.min.js"></script>
    <!-- Nice Select JS -->
    <script src="js/nicesellect.js"></script>
    <!-- Ytplayer JS -->
    <script src="js/ytplayer.min.js"></script>
    <!-- Flex Slider JS -->
    <script src="js/flex-slider.js"></script>
    <!-- ScrollUp JS -->
    <script src="js/scrollup.js"></script>
    <!-- Onepage Nav JS -->
    <script src="js/onepage-nav.min.js"></script>
    <!-- Easing JS -->
    <script src="js/easing.js"></script>
    <!-- Google Map JS -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnhgNBg6jrSuqhTeKKEFDWI0_5fZLx0vM"></script>
    <script src="js/gmap.min.js"></script>
    <script src="js/map-script.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
    <!-- Convini payment Confirm JS -->
    <script src="js/conviniPaymentConfirm.js"></script>
    <!-- Index JS -->
    <script src="js/index.js"></script>
</body>

</html>