<?php
  require_once("entities/Restaurant.class.php");
  if(isset($_GET["id"]) )
    $id = $_GET["id"];
else    
    $id="";
 ?>
<?php

$prods = QuanAn::DS_QuanAn();

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
							<h1 itemprop="headline">Search Your Favourite Food</h1>
							<form class="restaurant-search-form brd-rd2">
								<div class="row mrg10">
									<div class="col-md-6 col-sm-5 col-lg-5 col-xs-12">
										<div class="input-field brd-rd2"><input class="brd-rd2" type="text" placeholder="Restaurant Name"></div>
									</div>
									<div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
										<div class="input-field brd-rd2"><i class="fa fa-map-marker"></i><input class="brd-rd2" type="text" placeholder="Search Location"><i class="fa fa-location-arrow"></i></div>
									</div>
									<div class="col-md-2 col-sm-3 col-lg-3 col-xs-12">
										<button class="brd-rd2 red-bg" type="submit">SEARCH</button>
									</div>
								</div>
							</form>
						</div>
					</div>
                </div>
            </div>
        </section>

        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Search</a></li>
                    <li class="breadcrumb-item active">Restaurants Found</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block gray-bg bottom-padd210 top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="sec-wrapper">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12 col-lg-3">
                                            <div class="sidebar left">
                                                <div class="widget style2 Search_filters wow fadeIn" data-wow-delay="0.2s">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Search Filters</h4>
                                                    <div class="widget-data">
                                                        <ul>
                                                            <li><a href="#" title="" itemprop="url">Fast Food</a> <span>30</span></li>
                                                            <li><a href="#" title="" itemprop="url">North Indian</a> <span>28</span></li>
                                                            <li><a href="#" title="" itemprop="url">Chinese</a> <span>25</span></li>
                                                            <li><a href="#" title="" itemprop="url">Bakery</a> <span>11</span></li>
                                                            <li><a href="#" title="" itemprop="url">Mughlai</a> <span>7</span></li>
                                                            <li><a href="#" title="" itemprop="url">Pizza</a> <span>6</span></li>
                                                            <li><a href="#" title="" itemprop="url">Ice Cream</a> <span>6</span></li>
                                                            <li><a href="#" title="" itemprop="url">Rolls</a> <span>6</span></li>
                                                            <li><a href="#" title="" itemprop="url">Cafe</a> <span>5</span></li>
                                                            <li><a href="#" title="" itemprop="url">Italian</a> <span>5</span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
                                                    <div class="widget-data">
                                                        <ul>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-1"><label for="filt1-1">Promotions</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-2"><label for="filt1-2">Bookmarked</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-3"><label for="filt1-3">Pure veg</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-4"><label for="filt1-4">Free Delivery</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter" id="filt1-5"><label for="filt1-5">Online Payments</label></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
                                                    <div class="widget-data">
                                                        <ul>
                                                            <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-1"><label for="filt2-1">No minimum order 6</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-2"><label for="filt2-2">Up to ₹150 69</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-3"><label for="filt2-3">Up to ₹250 72</label></span></li>
                                                            <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-4"><label for="filt2-4">Up to ₹500</label></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div><!--Sidebar -->
                                        </div>
                                        <div class="col-md-9 col-sm-12 col-lg-9">
                                            <div class="title2-wrapper">
                                                <h3 class="marginb-0" itemprop="headline">Order food online in London</h3>
                                            </div>

                                          
                                            <div class="remove-ext">


                                                <div class="row">
                                              <!--dsquanan-->
                                                <?php
                                  foreach ($prods as $row) {

                                    ?>
                                                    <div class="col-md-6 col-sm-6 col-lg-6">
                                                        <div class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn" data-wow-delay="0.2s">
                                                            <div class="featured-restaurant-thumb">
                                                                <a href="restaurant-detail.php?id=QuanAn&MaQuanAn=<?php echo $row['MaQuanAn'];?>" title="" itemprop="url"><img src="assets/images/resource/most-popular-img1.png" alt="most-popular-img1.png" itemprop="image"></a>
                                                            </div>
                                                            <div class="featured-restaurant-info">
                                                                <span class="red-clr" style="
                                                                white-space: nowrap;
                                                                overflow: hidden;
                                                                text-overflow: ellipsis;
                                                                max-width: 150px">
                                                                <?php echo $row['So']; ?>
                                                                <?php echo $row['Duong']; ?>
                                                                <?php echo $row['Phuong']; ?>
                                                                <?php echo $row['Quan']; ?>
                                                                <?php echo $row['ThanhPho']; ?></span>
                                                                <h4 itemprop="headline"><a href="restaurant-detail.php?id=QuanAn&MaQuanAn=<?php echo $row['MaQuanAn'];?>" title="" itemprop="url"><?php echo $row['TenQuanAn'];?></a></h4>
                                                                <span class="food-types">Giờ mở cửa: <a href="#" title="" itemprop="url"><?php echo $row['GioMoCua'];?></a></span>
                                                                <span class="food-types">Giờ đóng cửa: <a href="#" title="" itemprop="url"><?php echo $row['GioDongCua'];?></a></span>


                                                        




                                                                <ul class="post-meta">
                                                                 <!--   <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                    <li><i class="flaticon-transport"></i> 30min</li> -->
                                                                    <li><i class="flaticon-money"></i>Điện thoại: <?php echo $row['SoDienThoai'];?></li>
                                                                </ul>
                                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <span class="post-likes style2 red-clr"><i class="fa fa-heart-o"></i> 12</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                    }
                                                ?>
                                              
                                                </div>
                                            
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <!--RedSection-->
  <?php
      require('./Block/RedSection.php');
      ?>
     <!-- red section -->
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
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
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
                        <a class="facebook brd-rd3" href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook"></i> Facebook</a>
                        <a class="google brd-rd3" href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i> Google</a>
                        <a class="twitter brd-rd3" href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i> Twitter</a>
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