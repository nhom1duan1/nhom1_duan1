<!DOCTYPE html>
<?php
ob_start();
    session_start();
?>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/dagon/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 09:36:25 GMT -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap"
          rel="stylesheet">
</head>
<body class="index-opt-1">
<div class="wrapper">
    <form id="block-search-mobile" method="get" class="block-search-mobile">
        <div class="form-content">
            <div class="control">
                <a href="#" class="close-block-serach"><span class="icon flaticon-close"></span></a>
                <input type="text" name="search" placeholder="Search" class="input-subscribe">
                <button type="submit" class="btn search">
                    <span><i class="flaticon-magnifying-glass" aria-hidden="true"></i></span>
                </button>
            </div>
        </div>
    </form>
<div id="block-quick-view-popup" class="block-quick-view-popup">
        <div class="quick-view-content">
            <a href="#" class="popup-btn-close"><span class="flaticon-close"></span></a>
            <div class="product-items">
            
                <div class="product-image">
                    <a href="#"><img src="assets/images/popup-pro.jpg" alt="p1"></a>
                </div>
                <div class="product-info">
                    <div class="product-name"><a href="#">Photo Camera</a></div>
                    <span class="star-rating">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="review">5 Review(s)</span>
                        </span>
                    <a href="wishlist.html" class="wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i>Add to
                        Wishlist</a>
                    <div class="product-infomation">
                        Description Our new HPB12 / A12 battery is rated at 2000mAh and designed to power up Black and
                        Decker FireStorm line of 12V tools allowing...
                    </div>
                </div>
                <div class="product-info-price">
                        <span class="price">
                            <ins>$229.00</ins>
                            <del>$259.00</del>
                        </span>
                    <div class="quantity">
                        <h6 class="quantity-title">Quantity:</h6>
                        <div class="buttons-added">
                            <input type="text" value="1" title="Qty" class="input-text qty text" size="1">
                            <a href="#" class="sign plus"><i class="fa fa-plus"></i></a>
                            <a href="#" class="sign minus"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <a href=""index.php?ctrl=cart"" class="btn-add-to-cart">Add to cart</a>
                </div>
            </div>
        </div>
    </div>
    <!-- HEADER -->
    <header class="site-header header-opt-1">
        <!-- header-top -->
        <div class="header-top">
            <div class="container">
                <!-- hotline -->
                <ul class="nav-top-left">
                    <li><a href="#">Chào mừng bạn đến với Fshop</a></li>
                </ul><!-- hotline -->
                <!-- heder links -->
                <ul class="nav-top-right dagon-nav">
                    <li class="menu-item-has-children"><a href="#" class="dropdown-toggle"><img
                            src="assets/images/general/vietnam.jpg" alt="flag">Việt Nam<i class="fa fa-angle-down"
                                                                                    aria-hidden="true"></i></a>
                        <ul class="submenu parent-megamenu">
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="assets/images/general/vietnam.jpg" alt="flag">Việt Nam</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="assets/images/general/l1.jpg" alt="flag">English</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="assets/images/general/l3.jpg" alt="flag">German</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="assets/images/general/l4.jpg" alt="flag">French</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="flag"><img src="assets/images/general/l5.jpg" alt="flag">Canada</a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#" class="dropdown-toggle">
                            <span>VNĐ (VietNam)</span><i class="fa fa-angle-down" aria-hidden="true"></i>
                        </a>
                        <ul class="submenu parent-megamenu">
                            <li class="switcher-option">
                                <a href="#" class="switcher-flag icon">VNĐ (VietNam)</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="switcher-flag icon">Euro (EUR)</a>
                            </li>
                            <li class="switcher-option">
                                <a href="#" class="switcher-flag icon">Dollar (USD)</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="../admin/login.php"><i class="flaticon-profile" aria-hidden="true"></i><?php echo ((!isset($_SESSION['username']))?"Đăng Nhập":$_SESSION['username']); ?></a></li>
                </ul><!-- heder links -->
            </div>
        </div> <!-- header-top -->
        <!-- header-content -->
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 nav-left">
                        <!-- logo -->
                        <strong class="logo">
                            <a href="index.php?ctrl=home"><img src="assets/images/logo.png" alt="logo"></a>
                        </strong>
                        <!-- logo -->
                    </div>
                    <div class="col-md-8 nav-mind">
                        <!-- block search -->
                        <div class="block-search">
                            <div class="block-content">
                                
                                <div class="form-search">
                                    <form>
                                        <div class="box-group">
                                            <input type="text" class="form-control"
                                                   placeholder="Nhập từ khóa cần tìm">
                                            <button class="btn btn-search" type="button"><span
                                                    class="flaticon-magnifying-glass"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- block search -->
                    </div>
                    <div class="col-md-2 nav-right">
                        <!-- block mini cart -->
                        <span data-action="toggle-nav" class="menu-on-mobile hidden-md style2">
                                <span class="btn-open-mobile home-page">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                                <span class="title-menu-mobile">Main menu</span> 
                            </span>
                        <div class="block-minicart dropdown style2">
                            <a class="minicart" href="index.php?ctrl=cart">

                                    <span class="counter qty">

                                        <span class="cart-icon"><i class="flaticon-shopping-cart"
                                                                   aria-hidden="true"></i></span>

                                        <span class="counter-number"><?php 
                                        $dem=0;
                                        $tongtien=0;
                                        if(isset($_SESSION['carts'])){
                                                foreach ($_SESSION['carts'] as  $p) {
                                                $dem= $dem + $p['quantity'];
                                                $tongtien= $tongtien+ $p['quantity']*$p['price'];
                                            };
                                        }
                                            
                                            echo $dem;
                                        ?></span>

                                    </span>
                                <span class="counter-your-cart">

                                        <span class="counter-label">Giỏ hàng:</span>

                                        <span class="counter-price">$<?php echo $tongtien ?></span>

                                    </span>
                            </a>
                        </div><!-- block mini cart -->
                        <a href="#" class="hidden-md search-hidden"><span class="flaticon-magnifying-glass"></span></a>
                        
                    </div>
                </div>
            </div>
        </div><!-- header-content -->
        <!-- header-menu-bar -->
        <div class="header-menu-bar header-sticky">
            <div class="header-menu-nav menu-style-1 ">
                <div class="container ">
                    <div class="header-menu-nav-inner  ">
                        <div class="header-menu header-menu-resize ">
                            <ul class="header-nav dagon-nav">
                                <li class="btn-close hidden-md"><i class="flaticon-close" aria-hidden="true"></i></li>
                                <li class="menu-item-has-children">
                                    <a href="index.php">Trang chủ</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="index.php?ctrl=product&action=product">sản phẩm</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="">tin tức</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="">liên hệ</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="">giỏ hàng</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="">Giới thiệu</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header-menu-bar -->
    </header>
    <!-- END HEADER -->
    <!--  -->
    <main class="site-main">
        <?php
            $ctrl='home';
            if(isset($_GET['ctrl'])){
                $ctrl= $_GET['ctrl'];
            }
            include 'controller/'.$ctrl.'.php';
        ?>
    </main>
        
    <!-- FOOTER -->
    <footer class="site-footer footer-opt-2">
        <div class="footer-column equal-container" style="margin-bottom: 30px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 equal-elem">
                        <div class="logo-footer"><img src="assets/images/logo-light.png" alt="logo"></div>
                        <div class="contacts">
                            <p class="contacts-info">Fshop là một đơn vị uy tính chuyên cung cấp các mặt hàng công nghệ. Công ty có hệ thống phân phối với nhiều chi nhánh khắp cả nước.</p>
                            <span class="contacts-info info-address ">314/55, Tân Chánh Hiệp, Q12, TP.HCM</span>
                            <span class="contacts-info info-phone">(+84) 929 441 57</span>
                            <span class="contacts-info info-support">khaitrung147@gmail.com</span>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-elem">
                        <div class="links">
                            <h3 class="title-of-section">Tài khoản</h3>
                            <ul>
                                <li><a href="#">Đăng kí</a></li>
                                <li><a href="#">Xem giỏ hàng</a></li>
                                <li><a href="#">Liên hệ</a></li>
                                <li><a href="#">Kiểm tra đơn hàng</a></li>
                                <li><a href="#">Trợ giúp</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6 equal-elem">
                        <div class="links">
                            <h3 class="title-of-section">Thông tin</h3>
                            <ul>
                                <li><a href="#">Đặc biệt</a></li>
                                <li><a href="#">Sản phẩm mới</a></li>
                                <li><a href="#">Sản phẩm bán chạy</a></li>
                                <li><a href="#">Tất cả sản phẩm</a></li>
                                <li><a href="#">Liên hệ</a></li>
                                <li><a href="#">Địa chỉ</a></li>
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 equal-elem">
                        <div class="links">
                            <h3 class="title-of-section">Khách hàng thân thiết</h3>
                            <span class="span-newsletter">Đăng kí trở thành khách hàng thân thiết để nhận được thông tin về sản phẩm mới.</span>
                            <div class="newsletter-form">
                                <form id="newsletter-validate-detail" class="form subscribe">
                                    <div class="control">
                                        <input type="email" placeholder="Nhập email" id="newsletter" name="email"
                                               class="input-subscribe">
                                        <button type="submit" title="Subscribe" class="btn subscribe">
                                            <span>Đăng nhập</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <div class="socials">
                                <a href="#" class="social"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#" class="social"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#" class="social"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#" class="social"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright full-width">
            <div class="container">
                <div class="copyright-right">
                    © Copyright 2020<span> Fshop</span>. All Rights Reserved.
                </div>
                <div class="pay-men">
                    <a href="#"><img src="assets/images/general/pay1.jpg" alt="pay1"></a>
                    <a href="#"><img src="assets/images/general/pay2.jpg" alt="pay2"></a>
                    <a href="#"><img src="assets/images/general/pay3.jpg" alt="pay3"></a>
                    <a href="#"><img src="assets/images/general/pay4.jpg" alt="pay4"></a>
                </div>
            </div>
        </div>
    </footer>
    <!-- end FOOTER -->
</div>
<a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
<!-- jQuery -->
<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/wow.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="assets/js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.sticky.js"></script>
<script type="text/javascript" src="assets/js/jquery.elevateZoom.min.js"></script>
<script src="assets/js/fancybox/source/jquery.fancybox.pack.js"></script>
<script src="assets/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
<script src="assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
<script type="text/javascript" src="assets/js/function.js"></script>
<script type="text/javascript" src="assets/js/Modernizr.js"></script>
<script type="text/javascript" src="assets/js/jquery.plugin.js"></script>
<script type="text/javascript" src="assets/js/jquery.countdown.js"></script>
</body>

<!-- Mirrored from ledthanhdat.vn/html/dagon/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Nov 2020 09:37:35 GMT -->
</html>
<?php
ob_flush();
?>