<?php
include 'connect.php';
include 'menu_header_admin.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
			<form action="xuly_them_sanpham.php"method="post" role="form" enctype="multipart/form-data">
                 <h3>Quản lý Sản Phẩm</h3>
                 <div class="form-group">
                     <input type="file"class="form-control"  name="hinhanh" required>
                     <label for=""></label>
                 </div>
                 <div class="form-group">
                    <input type="text"class="form-control"  name="tensp" required>
                    <label for="">Tên Sản Phẩm</label>
                 </div>
                 <div class="form-group">
                    <input type="text"class="form-control"  name="gia" required>
                    <label for="">Giá</label>
                 </div>
                 <div class="form-group">
                    <input type="text"class="form-control"  name="giacu" required>
                    <label for="">Giá Cũ</label>
                 </div>
                 <div class="form-group">
                    <input type="text"class="form-control"  name="loaisp" required>
                    <label for="">Loại sản phẩm</label>
                 </div>
                 <div class="form-group">
                    <input type="text"class="form-control"  name="chatlieu" required>
                    <label for="">Chất liệu</label>
                 </div>
                 <div class="form-group">
                    <input type="text"class="form-control"  name="xuatxu" required>
                    <label for="">Xuất xứ</label>
                 </div>
                 <div class="form-group">
                    <input type="text"class="form-control"  name="mausac" required>
                    <label for="">Màu sắc</label>
                 </div>
                 <div class="form-group">
                    <input type="text"class="form-control"  name="kichthuoc" required>
                    <label for="">Kích thước</label>
                 </div>
                
                 
                 <h5 style="font-size: 24px;">Tóm Tắt Sơ Lược</h5> 
                 <div class="form-group">
                 <td><textarea rows="10" cols="150px" width="100%" name="tomtat"></textarea></td>
                 </div>
                 
                 
                 
                 <input type="submit" value="Thêm Sản Phẩm" name="them_sanpham" id="btn-login"><br>
             </form>    
            

<body style="margin: 50px;">
    <h1> Quản Lý Sản Phẩm</h1>
    <table class='table'>
        <thead>
            <tr>
                    <th>ID_Sản Phẩm</th>
                    <th>Hình</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Loại Sản Phẩm</th>
                    <th>Xuất xứ</th>
                    <th>Màu Sắc</th>
                    <th>Kích Thước</th>
                    <th>Chất Liệu</th>
                    <th>Giá</th>
                    <th>Giá Cũ</th>
                    
                    
                    
            </tr>
        </thead>
        
        <tbody>
            <?php
           
    	$sql = 'SELECT * FROM sanpham ';
    	$result = mysqli_query($conn,$sql) ;
            ?>

<?php
        while($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $row["id"] ?></td>
            <td>
                <a href='thongtinsp.php?id=<?php echo $row['id'] ?>'>
                    <img src='./img_product/<?php echo $row['hinhanh']  ?>' alt='product images'style='width: 50px;'>
                </a>
            </td>
            <td><?php echo $row["tensp"] ?></td>
            <td><?php echo $row["loaisp"] ?></td>
            <td><?php echo $row["xuatxu"] ?></td>
            <td><?php echo $row["mausac"] ?></td>
            <td><?php echo $row["kichthuoc"] ?></td>
            <td><?php echo $row["chatlieu"] ?></td>
            <td><?php echo $row["gia"] ?></td>
            <td><?php echo $row["giacu"] ?></td>
            <td>
                <a class='btn btn-primary btn-sm' name="sua" href='sua_sanpham.php?id=<?php echo $row["id"] ?>'><i class="fa fa-wrench" aria-hidden="true"></i></a>
                <a class='btn btn-danger btn-sm' name="xoa" href="xuly_xoa_sanpham.php?id=<?php echo $row["id"] ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
        
    </table>
    <div class="wrapper">
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
         <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/3.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/4.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/5.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/1.png" alt="brand images"></a></li>
                                <li><a href="#"><img src="images/brand/2.png" alt="brand images"></a></li>
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
</body>
</html>