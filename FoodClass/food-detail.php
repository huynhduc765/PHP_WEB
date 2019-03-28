<?php
    require_once("entities/Product.class.php");
    if(isset($_GET["id"]) )
    $id = $_GET["id"];
else    
    $id="";
?>
  <?php
  
  $prods = MonAn::ChiTiet_MonAn();
  
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
                    <li class="breadcrumb-item active">Food Details</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block gray-bg bottom-padd210 top-padd30">
                
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="sec-box">
                            <?php
                                  foreach ($prods as $row) {

                                    ?>
    							<div class="sec-wrapper">
    								<div class="col-md-8 col-sm-12 col-lg-8">
    									<div class="restaurant-detail-wrapper">
    										<div class="restaurant-detail-info">
    											<div class="restaurant-detail-thumb">
    												<ul class="restaurant-detail-img-carousel">
    													<li><img class="brd-rd3" src="assets/images/resource/<?php echo $row['Avatar'];?>" alt="<?php echo $row['Avatar'];?>" itemprop="image"></li>
    													<li><img class="brd-rd3" src="assets/images/resource/restaurant-detail-big-img1-2.jpg" alt="restaurant-detail-big-img1-2.jpg" itemprop="image"></li>
    													<li><img class="brd-rd3" src="assets/images/resource/restaurant-detail-big-img1-3.jpg" alt="restaurant-detail-big-img1-3.jpg" itemprop="image"></li>
    													<li><img class="brd-rd3" src="assets/images/resource/restaurant-detail-big-img1-4.jpg" alt="restaurant-detail-big-img1-4.jpg" itemprop="image"></li>
    												</ul>
    												<ul class="restaurant-detail-thumb-carousel">
    													<li><img class="brd-rd3" src="assets/images/resource/<?php echo $row['Avatar'];?>" alt="<?php echo $row['Avatar'];?>" itemprop="image"></li>
    													<li><img class="brd-rd3" src="assets/images/resource/restaurant-detail-small-img1-2.jpg" alt="restaurant-detail-small-img1-2.jpg" itemprop="image"></li>
    													<li><img class="brd-rd3" src="assets/images/resource/restaurant-detail-small-img1-3.jpg" alt="restaurant-detail-small-img1-3.jpg" itemprop="image"></li>
    													<li><img class="brd-rd3" src="assets/images/resource/restaurant-detail-small-img1-4.jpg" alt="restaurant-detail-small-img1-4.jpg" itemprop="image"></li>
    												</ul>
    											</div>
    											<div class="restaurant-detail-title">
    												<h1 itemprop="headline"><?php echo $row['TenMonAn']; ?></h1>
    												<div class="info-meta">
    													<span><a href="#" title="" itemprop="url"><?php echo $row['TenQuanAn'];?></a></span>
    												</div>
    												<div class="rating-wrapper">
    													<a class="gradient-brd brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-star"></i> Rate <i>4.0</i></a>
    													<div class="rate-share brd-rd5">
    														<div class="rating-box-wrapper">
    															<span>Rate</span>
    															<div class="rating-box">
    																<span class="brd-rd2 clr1 on"></span>
    																<span class="brd-rd2 clr2 on"></span>
    																<span class="brd-rd2 clr3 on"></span>
    																<span class="brd-rd2 clr4 on"></span>
    																<span class="brd-rd2 clr5 on"></span>
    																<span class="brd-rd2 clr6 on"></span>
    																<span class="brd-rd2 clr7 off"></span>
    																<span class="brd-rd2 clr8 off"></span>
    																<i>4.0</i>
    															</div>
    														</div>
    														<div class="share-wrapper">
    															<div class="fb-share">
    																<label class="switch">
    																	<input type="checkbox">
    																	<span class="switch-slider brd-rd30"></span>
    																</label>
    																<a class="facebook brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-facebook-square"></i> Share on Facebook</a>
    															</div>
    															<div class="fb-share">
    																<label class="switch">
    																	<input type="checkbox">
    																	<span class="switch-slider brd-rd30"></span>
    																</label>
    																<a class="twitter brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-twitter"></i> Share on Twitter</a>
    															</div>
    														</div>
    													</div>
    												</div>
    												<span class="price"><?php echo $row['GiaTien'];?> <?php echo 'VND' ?> </span>
    												<div class="qty-wrap">
    													<input class="qty" type="text" value="1">
    												</div>
    												<p itemprop="description"><?php echo $row['GioiThieuMonAn']; ?></p>
    												<p itemprop="description">***************************************************************************************************************</p>
    												<a class="brd-rd3" href="#" title="" itemprop="url">Order Now</a>
    											</div>
    										</div>
    									</div>
    								</div>
    								<div class="col-md-4 col-sm-12 col-lg-4">
    									<div class="order-wrapper">
    										<div class="order-inner gradient-brd">
    											<h4 itemprop="headline">Your Order</h4>
    											<div class="order-list-wrapper">
    												<ul class="order-list-inner">
    													<li>
    														<div class="dish-name">
    															<i>.1</i> <h6 itemprop="headline">Chicken Tandoori Special</h6> <span class="price">$85.00</span>
    														</div>
    														<div class="dish-ingredients">
    															<span class="check-box"><input type="checkbox" id="checkbox1-1"><label for="checkbox1-1"><span>Drink</span> <i>$12</i></label></span>
    															<span class="check-box"><input type="checkbox" id="checkbox1-2"><label for="checkbox1-2"><span>Butter</span> <i>$12</i></label></span>
    														</div>
    														<div class="mor-ingredients">
    															<a class="red-clr" href="#" title="" itemprop="url">Edit</a>
    														</div>
    													</li>
    													<li>
    														<div class="dish-name">
    															<i>.2</i> <h6 itemprop="headline">Chicken Tandoori Special</h6> <span class="price">$90.00</span>
    														</div>
    														<div class="dish-ingredients">
    															<span class="check-box"><input type="checkbox" id="checkbox2-1"><label for="checkbox2-1"><span>Drink</span> <i>$10</i></label></span>
    															<span class="check-box"><input type="checkbox" id="checkbox2-2"><label for="checkbox2-2"><span>Butter</span> <i>$20</i></label></span>
    														</div>
    														<div class="mor-ingredients">
    															<a class="red-clr" href="#" title="" itemprop="url">Edit</a>
    														</div>
    													</li>
    													<li>
    														<div class="dish-name">
    															<i>.3</i> <h6 itemprop="headline">Chicken Tandoori Special</h6> <span class="price">$100.00</span>
    														</div>
    														<div class="dish-ingredients">
    															<span class="check-box"><input type="checkbox" id="checkbox3-1"><label for="checkbox3-1"><span>Drink</span> <i>$30</i></label></span>
    														</div>
    														<div class="mor-ingredients">
    															<a class="red-clr" href="#" title="" itemprop="url">Edit</a>
    															<div class="ingradient-list yellow-bg">
    																<span class="check-box"><input type="checkbox" id="checkbox4-1"><label for="checkbox4-1"><span>Extra Drink</span></label></span>
    																<span class="check-box"><input type="checkbox" id="checkbox4-2"><label for="checkbox4-2"><span>Extra Drink</span></label></span>
    																<span class="check-box"><input type="checkbox" id="checkbox4-3"><label for="checkbox4-3"><span>Extra Drink</span></label></span>
    															</div>
    														</div>
    													</li>
    												</ul>
    												<ul class="order-total">
    													<li><span>SubTotal</span> <i>$158</i></li>
    													<li><span>Delivery fee</span> <i>$70</i></li>
    													<li><span>Tax</span> <i>$12</i></li>
    												</ul>
    												<ul class="order-method brd-rd2 red-bg">
    													<li><span>Total</span> <span class="price">$340</span></li>
    													<li><span class="radio-box"><input type="radio" name="method" id="pay1-1"><label for="pay1-1"><i class="fa fa-money"></i> Cash</label></span> <span class="radio-box"><input type="radio" name="method" id="pay1-2"><label for="pay1-2"><i class="fa fa-credit-card-alt"></i> Card</label></span></li>
    													<li><a class="brd-rd2" href="#" title="" itemprop="url">CONFIRM ORDER</a></li>
    												</ul>
    											</div>
    										</div>
    									</div>
    								</div>
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div><!-- Section Box -->
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
    

         <!--Login-->
 
 
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="assets/js/google-map-int2.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>	

</html>