<?php
  require_once("entities/Product.class.php");
 ?>
<?php

$prods = MonAn::DS_MonAn();

?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Food Ordering HTML Template</title>
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">


    <link rel="stylesheet" href="assets/css/icons.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/red-color.css">
    <link rel="stylesheet" href="assets/css/yellow-color.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body itemscope>
    <main>
        <div class="preloader">
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>
  <!--header-->
  <?php
      require('./Block/Header.php');
      ?>
      <!--header-->
        <section>
            <div class="block">
                <div class="fixed-bg" style="background-image: url(assets/images/topbg.jpg);"></div>
                <div class="page-title-wrapper text-center">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="page-title-inner">
                            <h1 itemprop="headline">Our Menu</h1>
                            <span>A Greate Restaurant Website</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">our menus</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="remove-ext">
                                    <div class="row">


                                    <?php
                                  foreach ($prods as $item) {

                                    ?>
                                        <div class="col-md-4 col-sm-6 col-lg-4">
                                            <div class="popular-dish-box style2 wow fadeIn" data-wow-delay="0.6s">
                                                <div class="popular-dish-thumb">
                                                    <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                        title="" itemprop="url"><img
                                                            src="assets/images/resource/<?php echo $item['Avatar'];?>"
                                                            alt="<?php echo $item['Avatar'];?>" itemprop="image"></a>
                                                </div>
                                                <div class="popular-dish-info">
                                                    <h4 itemprop="headline"><a
                                                            href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                            title="" itemprop="url"><?php echo $item['TenMonAn']; ?></a>
                                                    </h4>
                                                    <span class="price"><?php echo $item['GiaTien']; ?></span>
                                                    <a class="brd-rd4"
                                                        href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                        title="Order Now" itemprop="url">Order Now</a>
                                                    <div class="restaurant-info">
                                                        <div class="restaurant-info-inner">
                                                            <h6 itemprop="headline"><a
                                                                    href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                    title=""
                                                                    itemprop="url"><?php echo $item['TenQuanAn']; ?></a>
                                                            </h6>
                                                            <span class="red-clr" style="
                                                        white-space: nowrap;
                                                        overflow: hidden;
                                                        text-overflow: ellipsis;
                                                        max-width: 50px;
                                                        "><?php echo $item['So']; ?>
                                                                <?php echo $item['Duong']; ?>
                                                                <?php echo $item['Phuong']; ?>
                                                                <?php echo $item['Quan']; ?>
                                                                <?php echo $item['ThanhPho']; ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- Popular Dish Box -->
                                        </div>
                                        <?php              
                                      }
                                        ?>

                                    </div>
                                </div>
                                <div class="pagination-wrapper text-center">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item prev"><a class="page-link brd-rd2" href="#"
                                                itemprop="url">PREVIOUS</a></li>
                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">1</a>
                                        </li>
                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">2</a>
                                        </li>
                                        <li class="page-item active"><span class="page-link brd-rd2">3</span></li>
                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">4</a>
                                        </li>
                                        <li class="page-item"><a class="page-link brd-rd2" href="#" itemprop="url">5</a>
                                        </li>
                                        <li class="page-item">........</li>
                                        <li class="page-item"><a class="page-link brd-rd2" href="#"
                                                itemprop="url">18</a></li>
                                        <li class="page-item next"><a class="page-link brd-rd2" href="#"
                                                itemprop="url">NEXT</a></li>
                                    </ul>
                                </div><!-- Pagination Wrapper -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

  <!--Footer-->
  <?php
      require('./Block/Footer.php');
      ?>
      <!--Footer-->
        <div class="bottom-bar dark-bg text-center">
            <div class="container">
                <p itemprop="description"><a href="templatespoint.net">Templates Point</a></p>
            </div>
        </div><!-- Bottom Bar -->

        <div class="log-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="log-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <h4 itemprop="headline">SIGN IN</h4>
                        <span>with your social network</span>
                    </div>
                    <div class="popup-social text-center">
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i
                                class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i
                                class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                    <form class="sign-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" placeholder="Username or Email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit">SIGN IN</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn" href="#" title="" itemprop="url">Not a member? Sign up</a>
                                <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="sign-popup text-center">
            <div class="sign-popup-wrapper brd-rd5">
                <div class="sign-popup-inner brd-rd5">
                    <a class="sign-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                    <div class="sign-popup-title text-center">
                        <h4 itemprop="headline">SIGN UP</h4>
                        <span>with your social network</span>
                    </div>
                    <div class="popup-social text-center">
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i
                                class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i
                                class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i
                                class="fa fa-twitter"></i> Twitter</a>
                    </div>
                    <span class="popup-seprator text-center"><i class="brd-rd50">or</i></span>
                    <form class="sign-form">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="text" placeholder="Username">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" type="submit">REGISTER NOW</button>
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <a class="sign-btn" href="#" title="" itemprop="url">Already Registered? Sign in</a>
                                <a class="recover-btn" href="#" title="" itemprop="url">Recover my password</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>


</html>