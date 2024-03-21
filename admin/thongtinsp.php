<?php
session_start();
include('connect.php');
$id = $_GET['id'];
$sql = "select * from sanpham";
?>

<?php
function display_product_details($id, $conn)
{
    $sql = "select * from sanpham where id = $id";
    $query = mysqli_query($conn, $sql);
    while ($data = mysqli_fetch_assoc($query)) {
        echo "<div class='col-md-5 col-lg-5 col-sm-12 col-xs-12'>
                    <div class='htc__product__details__tab__content'>
                        <div class='product__big__images'>
                            <div class='portfolio-full-image tab-content'>
                                <div role='tabpanel' class='tab-pane fade in active' id='img-tab-1'>
                                    <img src='./img_product/{$data['hinhanh']}' alt='product images' height='408' width='75%'>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
                <div class='col-md-7 col-lg-7 col-sm-12 col-xs-12 smt-40 xmt-40'>
                        <div class='ht__product__dtl'>
                            <h2>{$data['tensp']}</h2>
                            <h6>Chất liệu: {$data['chatlieu']}</h6>
                            <ul class='rating'>
                                <li><i class='icon-star icons'></i></li>
                                <li><i class='icon-star icons'></i></li>
                                <li><i class='icon-star icons'></i></li>
                                <li><i class='icon-star icons'></i></li>
                                <li><i class='icon-star icons'></i></li>
                            </ul>
                            <ul class='pro__prize'>
                                <li class='old__prize'>{$data['giacu']} VND</li>
                                <li style=color:red;>{$data['gia']} VND</li>
                            </ul>
                            <p class='pro__info'></p>
                            <div class='ht__pro__desc'>
                                    <div class='sin__desc'>
                                        <p><span>Loại sản phẩm: </span>{$data['loaisp']}<br><span>Xuất xứ: </span>{$data['xuatxu']}</p>
                                    </div>
                                    <div class='sin__desc align--left'>
                                        <p><span>Màu sắc: </span>{$data['mausac']} <br><span>Kích thước: </span>{$data['kichthuoc']}</p>
                                    </div>
                                    <div class='sin__desc product__share__link'>
                                        <p><span>Share this:</span></p>
                                        <ul class='pro__share'>
                                            <li><a href='#' target='_blank'><i class='icon-social-twitter icons'></i></a></li>

                                            <li><a href='#' target='_blank'><i class='icon-social-instagram icons'></i></a></li>

                                            <li><a href='https://www.facebook.com/Furny/?ref=bookmarks' target='_blank'><i class='icon-social-facebook icons'></i></a></li>

                                            <li><a href='#' target='_blank'><i class='icon-social-google icons'></i></a></li>

                                            <li><a href='#' target='_blank'><i class='icon-social-linkedin icons'></i></a></li>

                                            <li><a href='#' target='_blank'><i class='icon-social-pinterest icons'></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            <div class='best__product__action'>
                                <ul class='product__action--dft'>
                                <li><form action='cart.php' method='post'>
                                <input type='hidden' name='product_id' value='{$data['id']}'>
                                <button type='submit' name='add_to_cart'>MUA NGAY</button>
                            </form></li>
                                <li><a href='#'><i class='icon-shuffle icons'></i></a></li>
                                </ul><br>
                            </div>
                        </div>
                </div>
                </div>";
    }
}
?>

<?php
function display_product_footer($id, $conn)
{
    $sql = "select * from sanpham LIMIT 4";
    $query = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($query)) {
        echo "<div class='col-md-3 col-lg-3 col-sm-6 col-xs-12'>
                <div class='category'>
                    <div class='ht__cat__thumb'>
                        <a href='thongtinsp.php?id={$row['id']}'>
                            <img src='./img_product/{$row['hinhanh']}' alt='product images'>
                        </a>
                    </div>
                    <div class='fr__hover__info'>
                        <ul class='product__action'>
                        <li><form action='cart.php' method='post'>
                        <input type='hidden' name='product_id' value='{$row['id']}'>
                        <button type='submit' name='add_to_cart'><i class='icon-handbag icons'></i></button>
                    </form></li>
                        <li><a href='#'><i class='icon-shuffle icons'></i></a></li>
                        </ul>
                    </div>
                    <div class='fr__product__inner'>
                        <h4><a href='thongtinsp.php?id={$row['id']}'>{$row['tensp']}</a></h4>
                        <ul class='fr__pro__prize'>
                            <li class='old__prize'>{$row['giacu']} VND</li>
                            <li style='color: red;'>{$row['gia']} VND</li>
                        </ul>
                    </div>
                </div>
            </div>";
    }
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Details || Routine</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">


    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Owl Carousel min css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css?v= <?php echo time(); ?>">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">


    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="htc__header" class="htc__header__area header--one">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="menumenu__container clearfix">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-5">
                                <div class="logo">
                                    <a href="index.php"><img src="images/logo/routine.png" alt="logo images"></a>
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8 col-sm-5 col-xs-3">
                                <nav class="main__menu__nav hidden-xs hidden-sm">
                                    <ul class="main__menu">
                                        <li class="drop"><a href="index.php">Trang Chủ</a></li>
                                        <li class="drop"><a href="#">Tùy Chọn</a>
                                            <ul class="dropdown mega_dropdown">
                                                <!-- Start Single Mega MEnu -->
                                                <li><a class="mega__title" href="product-grid.php">Trang mua sắm</a>
                                                    <ul class="mega__item">
                                                        <li><a href="product-grid.php">Quần Nam</a></li>

                                                        <li><a href="product-grid2.php">Áo Nam</a></li>
                                                    </ul>
                                                </li>
                                                <!-- End Single Mega MEnu -->
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">Sản Phẩm</a>
                                            <ul class="dropdown">
                                                <li><a href="product-grid.php">Lưới Sản Phẩm</a></li>
                                                <li><a href="product-details.php">Thông Tin Chi Tiết Sản Phẩm</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">Thanh Toán</a>
                                            <ul class="dropdown">
                                                <li><a href="cart.php">Thủ Tục Thanh Toán</a></li>
                                                <li><a href="cart.php">Thanh Toán</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.php">Trang Chủ</a></li>
                                            <li><a href="#">Tùy Chọn</a>
                                                <ul>
                                                    <li><a class="mega__title" href="product-grid.php">Trang mua sắm</a>
                                                        <ul class="mega__item">
                                                            <li><a href="product-grid.php">Quần Nam</a></li>

                                                            <li><a href="product-grid2.php">Áo Nam</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Thanh Toán</a>
                                                <ul>
                                                    <li><a href="cart.php">Thủ Tục Thanh Toán</a></li>
                                                    <li><a href="cart.php">Thanh Toán</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-3 col-lg-2 col-sm-4 col-xs-4">
                                <div class="header__right">
                                    <div class="header__search search search__open">
                                        <a href="#"><i class="icon-magnifier icons"></i></a>
                                    </div>
                                    <div class="header__account">
                                        <a href="dangnhap.php"><i class="icon-user icons"></i></a>
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->

        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Tìm Kiếm... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Tổng Phụ:</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="cart.php">Xem Giỏ Hàng</a></li>
                        <li class="shp__checkout"><a href="cart.php">Thủ Tục Thanh Toán</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/banner1rs.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                    <a class="breadcrumb-item" href="index.php">Trang Chủ</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                    <a class="breadcrumb-item" href="product-grid.php">Sản Phẩm</a>
                                    <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- Start Product Details Area -->
        <section class="htc__product__details bg__white ptb--100">
            <!-- Start Product Details Top -->
            <div class="htc__product__details__top">
                <div class="container">
                    <div class="row">
                        <?php
                        display_product_details($id, $conn);
                        ?>
                    </div>
                </div>
            </div>
            <!-- End Product Details Top -->
        </section>
        <!-- End Product Details Area -->
        <!-- Start Product Description -->
        <!-- <section class="htc__produc__decription bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- Start List And Grid View  -->

        <!-- End List And Grid View -->
    </div>
    </div>
    <!-- <div class="row">
                    <div class="col-xs-12">
                        <-- <div class="ht__pro__details__content"> -->
    <!-- Start Single Content -->

    <!-- End Single Content -->
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- End Product Description -->
    <!-- Start Product Area -->
    <section class="htc__product__area--2 pb--100 product-details-res">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section__title--2 text-center">
                        <h2 class="title__line">Maybe you will like</h2>
                        <p>Khám phá vẻ đẹp bản thân từ phong cách thời trang của bạn</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product__wrap clearfix">
                    <!-- Start Single Product -->
                    <?php
                    display_product_footer($sql, $conn);
                    ?>
                    <!-- End Single Product -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Product Area -->
    <!-- Start Banner Area -->
    <div class="htc__brand__area bg__cat--4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="ht__brand__inner">
                        <ul class="brand__list owl-carousel clearfix">
                            <li><a href="#"><img src="images/brand/10.jpg" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/9.jpg" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/8.jpg" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/11.jpg" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/12.jpg" alt="brand images"></a></li>
                            <li><a href="#"><img src="images/brand/13.jpg" alt="brand images"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <!-- End Banner Area -->
    <!-- Start Footer Area -->
    <footer id="htc__footer">
        <!-- Start Footer Widget -->
        <div class="footer__container bg__cat--1">
            <div class="container">
                <div class="row">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer">
                            <h2 class="title__line--2">ABOUT US</h2>
                            <div class="ft__details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
                                <div class="ft__social__link">
                                    <ul class="social__link">
                                        <li><a href="#"><i class="icon-social-twitter icons"></i></a></li>

                                        <li><a href="#"><i class="icon-social-instagram icons"></i></a></li>

                                        <li><a href="#"><i class="icon-social-facebook icons"></i></a></li>

                                        <li><a href="#"><i class="icon-social-google icons"></i></a></li>

                                        <li><a href="#"><i class="icon-social-linkedin icons"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40">
                        <div class="footer">
                            <h2 class="title__line--2">information</h2>
                            <div class="ft__inner">
                                <ul class="ft__list">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">Delivery Information</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                    <li><a href="#">Terms & Condition</a></li>
                                    <li><a href="#">Manufactures</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                        <div class="footer">
                            <h2 class="title__line--2">my account</h2>
                            <div class="ft__inner">
                                <ul class="ft__list">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="cart.php">My Cart</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="cart.php">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-2 col-sm-6 col-xs-12 xmt-40 smt-40">
                        <div class="footer">
                            <h2 class="title__line--2">Our service</h2>
                            <div class="ft__inner">
                                <ul class="ft__list">
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="cart.php">My Cart</a></li>
                                    <li><a href="#">Login</a></li>
                                    <li><a href="cart.php">Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-3 col-sm-6 col-xs-12 xmt-40 smt-40">
                        <div class="footer">
                            <h2 class="title__line--2">NEWSLETTER </h2>
                            <div class="ft__inner">
                                <div class="news__input">
                                    <input type="text" placeholder="Your Mail*">
                                    <div class="send__btn">
                                        <a class="fr__btn" href="#">Send Mail</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
            </div>
        </div>
        <!-- End Footer Widget -->
        <!-- Start Copyright Area -->
        <div class="htc__copyright bg__cat--5">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright__inner">
                            <p>Copyright© <a href="https://freethemescloud.com/">Free themes Cloud</a> 2018. All right reserved.</p>
                            <a href="#"><img src="images/others/shape/paypol.png" alt="payment images"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area -->
    </footer>
    <!-- End Footer Style -->
    </div>
    <!-- Body main wrapper end -->

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="js/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap framework js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="js/plugins.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <!-- Waypoints.min.js. -->
    <script src="js/waypoints.min.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="js/main.js"></script>

</body>

</html>