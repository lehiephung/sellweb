<?php
include('connect.php');
session_start();

// Kiểm tra nếu giỏ hàng chưa tồn tại trong session, tạo mới
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}


// Xử lý thêm sản phẩm vào giỏ hàng
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $sql = "SELECT * FROM sanpham WHERE id = $product_id";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($query);

    // Thêm thông tin sản phẩm vào giỏ hàng
    $_SESSION['cart'][] = $data;
}


function display_cart($conn)
{
    if (empty($_SESSION['cart'])) {
        echo "<p>Giỏ hàng của bạn đang trống.</p>";
    }else{
    echo "<div class='cart-main-area ptb--100 bg__white'>
        <div class='container'>
            <div class='row'>
                <div class='col-md-12 col-sm-12 col-xs-12'>
                    <form action='#'>               
                        <div class='table-content table-responsive'>
                            <table>
                                <thead>
                                    <tr>
                                        <th class='product-thumbnail'>Sản Phẩm</th>
                                        <th class='product-name'>Tên Sản Phẩm</th>
                                        <th class='product-price'>Giá Bán</th>
                                        <th class='product-quantity'>Số Lượng</th>
                                        <th class='product-subtotal'>Tổng Cộng</th>
                                        <th class='product-remove'>Loại Bỏ</th>
                                    </tr>
                                </thead>
                                <tbody>";

    // Hiển thị thông tin từ giỏ hàng
    // Kiểm tra xem giỏ hàng có dữ liệu không
if (!empty($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $data) {
        echo "<tr>
                <td class='product-thumbnail'><a href='#'><img src='./img_product/{$data['hinhanh']}' alt='product img' /></a></td>
                <td class='product-name'><a href='#'>{$data['tensp']}</a></td>
                <td class='product-price'><span class='amount'>{$data['gia']} Đ</span></td>
                <td class='product-quantity'><input type='number' value='1' /></td>
                <td class='product-subtotal'>{$data['gia']} Đ</td>
                <td class='product-remove'>
                    <form method='post' action='#'>
                        <input type='hidden' name='remove_id' value='{$data['id']}' />
                        <button type='submit' name='remove_product'><i class='icon-trash icons'></i></button>
                    </form>
                </td>
            </tr>";
    }
    echo "<tr>
            <td colspan='6' style='text-align: right;'>
                <form method='post' action='#'>
                    <button type='submit' name='remove_all'>Xóa tất cả</button>
                </form>
            </td>
        </tr>";
} else {
    // Nếu giỏ hàng trống, hiển thị một hàng rỗng
    echo "<tr><td colspan='6'>Không có sản phẩm trong giỏ hàng</td></tr>";
}

// Xử lý xóa sản phẩm cụ thể
if (isset($_POST['remove_product'])) {
    $remove_id = $_POST['remove_id'];
    // Xóa sản phẩm có ID đã chọn
    // Code xử lý xóa sản phẩm ở đây
}

// Xử lý xóa tất cả sản phẩm
if (isset($_POST['remove_all'])) {
    // Xóa tất cả sản phẩm trong giỏ hàng
    unset($_SESSION['cart']);
    // Code xử lý xóa tất cả sản phẩm ở đây
}

    

    echo "</tbody>
        </table>
    </div>
</form> 
</div>
</div>
</div>
</div>";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['remove_id'])) {
    $remove_id = $_POST['remove_id'];

    // Tìm vị trí của sản phẩm trong giỏ hàng
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $remove_id) {
            // Loại bỏ sản phẩm khỏi giỏ hàng
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            break; // Dừng vòng lặp khi đã loại bỏ sản phẩm
        }
    }
}
function calculate_cart_total()
{
    $total = 0;

    foreach ($_SESSION['cart'] as $data) {
        // Kiểm tra xem giá có phải là số hay không trước khi cộng vào tổng
        if (is_numeric($data['gia'])) {
            $total += $data['gia'];
        }
    }

    return $total;
}

// Gọi hàm hiển thị giỏ hàng

?>



<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Cart || Asbab - eCommerce HTML5 Template</title>
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
    <link rel="stylesheet" href="style.css">
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
                                                <li><a href="product-grid.html">Lưới Sản Phẩm</a></li>
                                                <li><a href="product-details.html">Thông Tin Chi Tiết Sản Phẩm</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">Thanh Toán</a>
                                            <ul class="dropdown">
                                                <li><a href="checkout.html">Thủ Tục Thanh Toán</a></li>
                                                <li><a href="cart.html">Thanh Toán</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>

                                <div class="mobile-menu clearfix visible-xs visible-sm">
                                    <nav id="mobile_dropdown">
                                        <ul>
                                            <li><a href="index.php">Trang Chủ</a></li>
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
                                            <li><a href="#">Thanh Toán</a>
                                                <ul>
                                                    <li><a href="checkout.html">Thủ Tục Thanh Toán</a></li>
                                                    <li><a href="cart.html">Thanh Toán</a></li>
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
                                        <a href="#"><i class="icon-user icons"></i></a>
                                    </div>
                                    <div class="htc__shopping__cart">
                                        <a class="cart__menu" href="#"><i class="icon-handbag icons"></i></a>
                                        <a href="#"><span class="htc__qua">0</span></a>
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
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Tìm kiếm... " type="text">
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
                        <div class="shp__single__product">
                            
                        </div>
                        <div class="shp__single__product">
                            
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Tổng Phụ:</li>
                        <li class="total__price">0 Đ</li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/10.png) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bradcaump__inner">
                                <nav class="bradcaump-inner">
                                  <a class="breadcrumb-item" href="index.php">Trang Chủ</a>
                                  <span class="brd-separetor"><i class="zmdi zmdi-chevron-right"></i></span>
                                  <span class="breadcrumb-item active">Giỏ Hàng</span>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="cart-main-area ptb--100 bg__white">
            <?php
                display_cart($conn);
            ?>
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 smt-40 xmt-40">
            <div class="htc__cart__total">
                
                <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="buttons-cart--inner">
                                    <div class="buttons-cart">
                                        <a href="index.php">Tiếp Tục Mua Sắm</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="ht__coupon__code">
                                    <span>Nhập Mã Giảm Giá Của Bạn</span>
                                    <div class="coupon__box">
                                        <input type="text" placeholder="">
                                        <div class="ht__cp__btn">
                                            <a href="#">Nhập</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12 smt-40 xmt-40">
                                <div class="htc__cart__total">
                                    <h6>Tổng Giỏ Hàng</h6>
                                    <div class="cart__desk__list">
                                    <ul class="cart__price">
                                        <li><?php
                                            $total = calculate_cart_total()*1000;
                        
                                            echo "<div class='total-price'>Giá trị đơn hàng: " .number_format($total) ." Đ</div>";
                                        ?><li>
                                        <?php
                            
                                            $total1 = $total /10;
                                            echo "<div class='total-price'>Thuế: " . number_format($total1) ." Đ</div>";
                                        ?></li>
                    
                                        <li>
                                        <?php
                            
                                            $total2 = $total1+$total;
                                            echo "<div class='total-price'>Tổng giá trị đơn hàng: " . number_format($total2) ." Đ</div>";
                                        ?></li>
                                    </ul>  
                                    
                                    <ul class='payment__btn'>
                                        <li class='active'><a href='checkout.html'>Thanh Toán</a></li>
                                        <li><a href='index.php'>Tiếp Tục Mua Sắm</a></li>
                                    </ul>
                                </div>
                            </div>                                       
            </div>
                                
        <!-- cart-main-area end -->
        <!-- Start Brand Area -->
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
        <!-- End Brand Area -->
        <!-- Start Banner Area -->
        <div class="htc__banner__area">
            <ul class="banner__list owl-carousel owl-theme clearfix">
                <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/3.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/4.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/5.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/6.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/1.jpg" alt="banner images"></a></li>
                <li><a href="product-details.html"><img src="images/banner/bn-3/2.jpg" alt="banner images"></a></li>
            </ul>
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
                                        <li><a href="#">Terms  & Condition</a></li>
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
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
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
                                        <li><a href="cart.html">My Cart</a></li>
                                        <li><a href="#">Login</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
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