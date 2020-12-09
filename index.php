<?php session_start();?>
<!DOCTYPE html>
<?php
ob_start();
    if(isset($_GET['user'])){
        $_SESSION['username']=$_GET['user'];
    }
    if (isset($_POST['sbs'])) {
        $_SESSION['search']=$_POST['search'];
    }

    if (isset($_GET['logout'])) {
    session_destroy();
    header('location: admin/login.php');
  }
?>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="shortcut icon" type="image/x-icon" href="site/assets/images/favicon.png" />
    <link rel="stylesheet" type="text/css" href="site/assets/fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="site/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="site/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="site/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="site/assets/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" type="text/css" href="site/assets/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="site/assets/css/chosen.css">
    <link rel="stylesheet" type="text/css" href="site/assets/css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="site/assets/css/style.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap"
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

                        <?php
                            if(!isset($_SESSION['username'])){
                                echo '<li><a href="admin/login.php">
                                    <i class="flaticon-profile" aria-hidden="true"></i>Đăng nhập
                                </a></li>';
                            }
                            else{
                                echo '<li class="menu-item-has-children">
                                    <a href="admin/login.php" class="dropdown-toggle">
                                        <i class="flaticon-profile" aria-hidden="true"></i>'.$_SESSION['username'].'<i class="fa fa-angle-down" aria-hidden="true"></i>
                                    </a>
                                    <ul class="submenu parent-megamenu">
                                        <li class="switcher-option">
                                            <a href="#" class="switcher-flag icon">Quản lý tài khoản</a>
                                        </li>
                                        <li class="switcher-option">
                                            <a href="index.php?logout" class="switcher-flag icon">Đăng xuất</a>
                                        </li>
                                    </ul>
                                </li>';
                            }
                        ?>
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
                                <a href="index.php?ctrl=home"><img src="site/assets/images/logo.png" alt="logo"></a>
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
                                                <input type="hidden" name="ctrl" value="search">
                                                <input type="search" id="user-search" class="form-control" name="search"
                                                    placeholder="Nhập từ khóa cần tìm">
                                                <button class="btn btn-search" name="sbs" type="submit">
                                                    <span class="flaticon-magnifying-glass"></span>
                                                </button>
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

                                        <span class="counter-price"><?php echo $tongtien ?>-VNĐ</span>

                                    </span>
                                </a>
                            </div><!-- block mini cart -->
                            <a href="#" class="hidden-md search-hidden"><span
                                    class="flaticon-magnifying-glass"></span></a>

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
                                    <li class="btn-close hidden-md"><i class="flaticon-close" aria-hidden="true"></i>
                                    </li>
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
                                        <a href="index.php?ctrl=contact">liên hệ</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="index.php?ctrl=about_us">Giới thiệu</a>
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
            include 'site/controller/'.$ctrl.'.php';
        ?>
        </main>

        <!-- FOOTER -->
        <footer class="site-footer footer-opt-2">
            <div class="footer-column equal-container" style="margin-bottom: 30px;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 equal-elem">
                            <div class="logo-footer"><img src="site/assets/images/logo-light.png" alt="logo"></div>
                            <div class="contacts">
                                <p class="contacts-info">Fshop là một đơn vị uy tính chuyên cung cấp các mặt hàng công
                                    nghệ. Công ty có hệ thống phân phối với nhiều chi nhánh khắp cả nước.</p>
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
                                    <li><a href="index.php?ctrl=cart">Xem giỏ hàng</a></li>
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
                                    <li><a href="index.php#1">Sản phẩm giá tốt</a></li>
                                    <li><a href="index.php#2">Sản phẩm nhiều lượt xem</a></li>
                                    <li><a href="index.php#3">Sản phẩm đang giảm giá</a></li>
                                    <li><a href="index.php?ctrl=product">Tất cả sản phẩm</a></li>
                                    <li><a href="index.php?ctrl=contact">Địa chỉ</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        © Copyright 2020<span> Fshop</span>. All Rights Reserved.
                    </div>
                </div>
            </div>

        </footer>
        <!-- end FOOTER -->
    </div>
    <a href="#" id="scrollup" title="Scroll to Top">Scroll</a>
    <!-- jQuery -->
    <script type="text/javascript" src="site/assets/js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="site/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="site/assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="site/assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="site/assets/js/wow.min.js"></script>
    <script type="text/javascript" src="site/assets/js/jquery.actual.min.js"></script>
    <script type="text/javascript" src="site/assets/js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="site/assets/js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="site/assets/js/jquery.sticky.js"></script>
    <script type="text/javascript" src="site/assets/js/jquery.elevateZoom.min.js"></script>
    <script src="site/assets/js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="site/assets/js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="site/assets/js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>
    <script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyC3nDHy1dARR-Pa_2jjPCjvsOR4bcILYsM'></script>
    <script type="text/javascript" src="site/assets/js/function.js"></script>
    <script type="text/javascript" src="site/assets/js/Modernizr.js"></script>
    <script type="text/javascript" src="site/assets/js/jquery.plugin.js"></script>
    <script type="text/javascript" src="site/assets/js/jquery.countdown.js"></script>
</body>

</html>
<?php
ob_flush();
?>