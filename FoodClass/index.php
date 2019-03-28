
<?php

  require_once("entities/Product.class.php");
  require_once("entities/Restaurant.class.php");
  if(isset($_GET["id"]) )
  $id = $_GET["id"];
else    
  $id="";
?>
<?php

$tenmonan_theoloai = MonAn::DS_3MonAn_TrangChu();
$pros = QuanAn::DS_QuanAn();

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
    <link rel="stylesheet" href="assets/css/animate.min.css">
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
                <div style="background-image: url(assets/images/topbg.jpg);" class="fixed-bg"></div>
                <div class="restaurant-searching text-center">
                    <div class="restaurant-searching-inner">
                        <h2 itemprop="headline">Order <span>Food Online From</span> the Best Restaurants</h2>
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
                        <div class="funfacts">
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="assets/images/resource/fact-icon1.png" alt="fact-icon1" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter">137</span></strong>
                                            <h5>Restaurant</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="assets/images/resource/fact-icon2.png" alt="fact-icon2" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter">158</span></strong>
                                            <h5>People Served</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="assets/images/resource/fact-icon3.png" alt="fact-icon3" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter">659</span>K</strong>
                                            <h5>Happy Service</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                                <div class="col-md-3 col-sm-6 col-lg-3">
                                    <div class="fact-box">
                                        <i class="brd-rd50"><img src="assets/images/resource/fact-icon4.png" alt="fact-icon4" itemprop="image"></i>
                                        <div class="fact-inner">
                                            <strong><span class="counter">235</span></strong>
                                            <h5>Regular users</h5>
                                        </div>
                                    </div><!-- Fact Box -->
                                </div>
                        </div><!-- Fun Facts -->
                    </div>
                    <img class="left-scooty-mockup" src="assets/images/resource/restaurant-mockup1.png" alt="restaurant-mockup1.png" itemprop="image">
                    <img class="bottom-clouds-mockup" src="assets/images/resource/clouds.png" alt="clouds.png" itemprop="image">
                </div><!-- Restaurant Searching -->
            </div>
        </section>

       
        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Your Favourite Food</span>
                                    <h2 itemprop="headline">Choose & Enjoy</h2>
                                </div>
                            </div>
                            
                                <div class="row remove-ext5">
                                <?php
                                foreach ($tenmonan_theoloai as $rows) 
                                {        
                                ?>
                                    <div class="col-md-4 col-sm-6 col-lg-4">
                                        <div class="popular-dish-box wow fadeIn" data-wow-delay="0.6s">
                                            <div class="popular-dish-thumb">
                                                <a href="food-detail.html" title="" itemprop="url"><img src="assets/images/resource/<?php echo $rows['Avatar'];?>" alt="popular-dish-img3.jpg" itemprop="image"></a>
                                                <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 5.00</span>
                                                <span class="post-likes brd-rd4"><i class="fa fa-heart-o"></i> 15</span>
                                            </div>
                                            <div class="popular-dish-info">
                                                <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">
                                                <?php echo $rows['TenMonAn'];?></a></h4>
                                                <p itemprop="description"><?php echo $rows['GioiThieuMonAn'];?></p>
                                                <span class="price"><?php echo $rows['GiaTien'];?> VND</span>
                                                <a class="brd-rd2" href="food-detail.html" title="Order Now" itemprop="url">Order Now</a>
                                                <div class="restaurant-info">
                                                    <img src="assets/images/resource/restaurant-logo1.png" alt="restaurant-logo3.png" itemprop="image">
                                                    <div class="restaurant-info-inner">
                                                        <h6 itemprop="headline"><a href="restaurant-detail.php" title="" itemprop="url">Fabio al Porto Ristorante</a></h6>
                                                        <span class="red-clr">5th Avenue New York 68</span>
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
                    </div>
                </div>
            </div>
        </section><!-- choose and enjoy meal -->
		
	

        <section>
            <div class="block blackish low-opacity">
                <div class="fixed-bg" style="background-image: url(assets/images/parallax1.jpg);"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Website for Restaurant and Cafe</span>
                                    <h2 class="text-white" itemprop="headline">easy order in 3 steps</h2>
                                </div>
                            </div>
                            <div class="remove-ext text-center">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.2s">
                                            <i><img src="assets/images/resource/setp-img1.png" alt="setp-img1.png" itemprop="image"> <span class="brd-rd50 red-bg">1</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Explore Restaurants</h4>
                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.4s">
                                            <i><img src="assets/images/resource/setp-img2.png" alt="setp-img2.png" itemprop="image"> <span class="brd-rd50 red-bg">2</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Choose a Tasty Dish</h4>
                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4">
                                        <div class="step-box wow fadeIn" data-wow-delay="0.6s">
                                            <i><img src="assets/images/resource/setp-img3.png" alt="setp-img3.png" itemprop="image"> <span class="brd-rd50 red-bg">3</span></i>
                                            <div class="setp-box-inner">
                                                <h4 itemprop="headline">Follow The Status</h4>
                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </div>
                                        </div><!-- Step Box -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Website for Restaurant and Cafe</span>
                                    <h2 itemprop="headline">Featured resturents</h2>
                                </div>
                            </div>
                            <div class="featured-restaurants-wrapper">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="featured-restaurants-list">
                                            <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.1s">
                                                <div class="featured-restaurant-thumb">
                                                    <a href="food-detail.html" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/featured-restaurant-img1.jpg" alt="featured-restaurant-img1.jpg" itemprop="image"></a>
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                    <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Tuna Roast Source</a></h4>
                                                    <span class="price">$85.00</span>
                                                    
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                        <li><i class="flaticon-transport"></i> 30min</li>
                                                    </ul>
                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                </div>
                                            </div>
                                            <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.2s">
                                                <div class="featured-restaurant-thumb">
                                                    <a href="food-detail.html" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/featured-restaurant-img2.jpg" alt="featured-restaurant-img2.jpg" itemprop="image"></a>
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                    <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Crab With Curry Sources</a></h4>
                                                    <span class="price">$70.00</span>
                                                    
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i> Min order $40</li>
                                                        <li><i class="flaticon-transport"></i> 20min</li>
                                                    </ul>
                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.03</span>
                                                </div>
                                            </div>
                                            <div class="featured-restaurant-box wow fadeIn" data-wow-delay="0.3s">
                                                <div class="featured-restaurant-thumb">
                                                    <a href="food-detail.html" title="" itemprop="url"><img class="brd-rd2" src="assets/images/resource/featured-restaurant-img3.jpg" alt="featured-restaurant-img3.jpg" itemprop="image"></a>
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                    <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Imported Salmon Steak</a></h4>
                                                    <span class="price">$90.00</span>
                                                    
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i> Min order $60</li>
                                                        <li><i class="flaticon-transport"></i> 45min</li>
                                                    </ul>
                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 5.00</span>
                                                </div>
                                            </div>
                                        </div><!-- Featured Restaurants List -->
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-lg-6">
                                        <div class="featured-restaurant-gallery">
                                            <div class="featured-restaurant-carousel">
                                                <div class="featured-restaurant-thumb"><img class="brd-rd2" src="assets/images/resource/featured-restaurant-gallery1.jpg" alt="featured-restaurant-gallery1.jpg" itemprop="image"></div>
                                                <div class="featured-restaurant-thumb"><img class="brd-rd2" src="assets/images/resource/featured-restaurant-gallery2.jpg" alt="featured-restaurant-gallery2.jpg" itemprop="image"></div>
                                            </div>
                                            <div class="featured-restaurant-box">
                                                <div class="featured-restaurant-thumb">
                                                    <a class="red-bg brd-rd2" data-fancybox href="https://vimeo.com/49674259" title="Click To Play" itemprop="url"><i class="fa fa-play"></i></a>
                                                    <span class="video-time">15mint</span>
                                                </div>
                                                <div class="featured-restaurant-info">
                                                    <span class="red-clr">5th Avenue New York 68</span>
                                                    <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">Maenaam Thai Restaurant</a></h4>
                                                    <span class="price">$85.00</span>
                                                    
                                                    <ul class="post-meta">
                                                        <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                        <li><i class="flaticon-transport"></i> 30min</li>
                                                    </ul>
                                                    <span class="post-rate yellow-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                </div>
                                            </div>
                                        </div><!-- Featured Restaurant Gallery -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="block grayish low-opacity ">
                <div class="fixed-bg" style="background-image: url(assets/images/pattern.png)"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="filters-wrapper">
                                <div class="title1-wrapper text-center">
                                    <div class="title1-inner">
                                        <span>Your Favourite Restaurant</span>
                                        <h2 itemprop="headline">Choose your restaurant</h2>
                                    </div>
                                </div>
                                <ul class="filter-buttons center ext-btm20">
                                    <li><a class="brd-rd30" data-filter=".filter-item1" href="#" itemprop="url">Restaurant</a></li>
                 
                                </ul><!-- Filter Buttons -->
                                <div class="filters-inner">

                                    <div class="row">
                                        <div class="masonry">
                                        
                                    <?php
                                  foreach ($pros as $item) {

                                    ?>
                                            <div class="col-md-6 col-sm-6 col-lg-6 filter-item filter-item1">
                                                <div class="featured-restaurant-box style2 brd-rd12 wow fadeIn" data-wow-delay="0.1s">
                                                    <div class="featured-restaurant-thumb">
                                                        <a href="restaurant-detail.php?id=QuanAn&MaQuanAn=<?php echo $item['MaQuanAn'];?>" title="" itemprop="url"><img src="assets/images/resource/most-popular-img1-1.png" alt="most-popular-img1-1.png" itemprop="image"></a>
                                                    </div>
                                                    <div class="featured-restaurant-info">
                                                        <span class="red-clr">5th Avenue New York 68</span>
                                                        <h4 itemprop="headline"><a href="restaurant-detail.php?id=QuanAn&MaQuanAn=<?php echo $item['MaQuanAn'];?>" title="" itemprop="url"><?php echo $item['TenQuanAn'];?></a></h4>
                                                        <span class="food-types">Giờ mở cửa: <a  title="" itemprop="url"><?php echo $item['GioMoCua'];?></a></span>
                                                        <span class="food-types">Giờ đóng cửa: <a  title="" itemprop="url"><?php echo $item['GioDongCua'];?></a></span>

                                                        <ul class="post-meta">
                                                   
                                                            <li><i class="flaticon-money"></i></i>Điện thoại: <?php echo $item['SoDienThoai'];?></li>
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
                            </div><!-- Filters Wrapper -->
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

<!---
        <div class="newsletter-popup-wrapper text-center">
            <div class="newsletter-popup-inner" style="background-image: url(assets/images/newsletter-bg.jpg);">
                <a class="close-btn brd-rd50" href="#" title="Close Button" itemprop="url"><i class="fa fa-close"></i></a>
                <h3 itemprop="headline"><i class="fa fa-envelope-open red-clr"></i> SIGN UP FOR RECENT UPDATES</h3>
                <p itemprop="description">Join our Subscribers list to get the latest news, updates and special offers delivered directly in your inbox.</p>
                <form class="newsletter-frm brd-rd30">
                    <input class="brd-rd30" type="email" placeholder="ENTER YOUR EMAIL">
                    <button class="brd-rd30 red-bg" type="submit">SUBSCRIBE</button>
                </form>
                <span class="red-clr"><i class="fa fa-check"></i> Thanks, your address has been added.</span>
            </div>
        </div>
-->
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>	

</html>