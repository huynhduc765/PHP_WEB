<?php
  require_once("entities/Restaurant.class.php");
  require_once("entities/Product.class.php");

  if(isset($_GET["id"]) )
    $id = $_GET["id"];
else    
    $id="";
 ?>
<?php

$ten_chitietquanan = QuanAn::ChiTiet_QuanAn();
$ten_loaimonan = MonAn::TenLoai_MonAn();
$tenmonan_theoloai = MonAn::MonAn_TheoLoai();


/*

//$MaQuanAn1 = $_GET['MaQuanAn'];
$quanan1 = "SELECT * from MonAn,LoaiMonAn 
where LoaiMonAn.MaLoaiMonAn = MonAn.MaLoaiMonAn
 and LoaiMonAn.MaQuanAn = $MaQuanAn
  ";
$chitietquanan = mysqli_query($conn,$quanan1);
mysqli_close($conn);
*/
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
                                        <div class="input-field brd-rd2"><input class="brd-rd2" type="text"
                                                placeholder="Restaurant Name"></div>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
                                        <div class="input-field brd-rd2"><i class="fa fa-map-marker"></i><input
                                                class="brd-rd2" type="text" placeholder="Search Location"><i
                                                class="fa fa-location-arrow"></i></div>
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
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Restaurant</a></li>
                    <li class="breadcrumb-item active">Restaurant Details</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="sec-wrapper">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-12 col-lg-8">
                                            <div class="restaurant-detail-wrapper">
                                                <div class="restaurant-detail-info">
                                                    <div class="restaurant-detail-thumb">
                                                        
                                                    <!--hinhanhquan-->
                                                        <?php
                                                        foreach ($ten_chitietquanan as $row) 
                                                        {        
                                                        ?>
                                                        <ul class="restaurant-detail-img-carousel">
                                                            <li><img class="brd-rd3"
                                                                    src="assets/images/resource/<?php echo $row['AvatarQuan'];?>"
                                                                    alt="<?php echo $row['AvatarQuan'];?>"
                                                                    itemprop="image"></li>
                                                            <li><img class="brd-rd3"
                                                                    src="assets/images/resource/<?php echo $row['AvatarQuan'];?>"
                                                                    alt="<?php echo $row['AvatarQuan'];?>"
                                                                    itemprop="image"></li>
                                                           
                                                        </ul>
                                                        <ul class="restaurant-detail-thumb-carousel">
                                                            <li><img class="brd-rd3"
                                                                    src="assets/images/resource/<?php echo $row['AvatarQuanQuan'];?>"
                                                                    alt="<?php echo $row['AvatarQuan'];?>"
                                                                    itemprop="image"></li>
                                                            <li><img class="brd-rd3"
                                                                    src="assets/images/resource/<?php echo $row['AvatarQuan'];?>"
                                                                    alt="<?php echo $row['AvatarQuan'];?>"
                                                                    itemprop="image"></li>
                                                          
                                                        </ul>
                                                        <?php
                                                        }
                                                        ?>
                                                    </div>

                                                    <!--tenquan-->
                                                    <?php
                                                        foreach ($ten_chitietquanan as $rows) 
                                                         {        
                                                        ?>
                                                    <div class="restaurant-detail-title">
                                                        <h1 itemprop="headline"><?php echo $rows['TenQuanAn']; ?></h1>
                                                        <div class="info-meta">
                                                            <span><?php echo $row['So']; ?>
                                                                <?php echo $row['Duong']; ?>
                                                                <?php echo $row['Phuong']; ?></span>
                                                            <span><a href="#" title="" itemprop="url"><?php echo $row['Quan']; ?></a>, <a
                                                                    href="#" title="" itemprop="url"><?php echo $row['ThanhPho']; ?></a></span>
                                                        </div>
                                                        <div class="rating-wrapper">
                                                            <a class="gradient-brd brd-rd2" href="#" title=""
                                                                itemprop="url"><i class="fa fa-star"></i> Rate
                                                                <i>4.0</i></a>
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
                                                                        <a class="facebook brd-rd2" href="#" title=""
                                                                            itemprop="url"><i
                                                                                class="fa fa-facebook-square"></i> Share
                                                                            on Facebook</a>
                                                                    </div>
                                                                    <div class="fb-share">
                                                                        <label class="switch">
                                                                            <input type="checkbox">
                                                                            <span class="switch-slider brd-rd30"></span>
                                                                        </label>
                                                                        <a class="twitter brd-rd2" href="#" title=""
                                                                            itemprop="url"><i class="fa fa-twitter"></i>
                                                                            Share on Twitter</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php
                                                        }
                                                        ?>


                                                    <div class="restaurant-detail-tabs">
                                                        <ul class="nav nav-tabs">
                                                            <li class="active"><a href="#tab1-1" data-toggle="tab"><i
                                                                        class="fa fa-cutlery"></i> Menu</a></li>
                                                            <li><a href="#tab1-2" data-toggle="tab"><i
                                                                        class="fa fa-picture-o"></i> Gallery</a></li>
                                                            <li><a href="#tab1-3" data-toggle="tab"><i
                                                                        class="fa fa-star"></i> Reviews</a></li>
                                                            <li><a href="#tab1-4" data-toggle="tab"><i
                                                                        class="fa fa-book"></i> Book A Table</a></li>
                                                            <li><a href="#tab1-5" data-toggle="tab"><i
                                                                        class="fa fa-info"></i> Restaurant Info</a></li>
                                                        </ul>

                                                        <div class="tab-content">
                                                            <div class="tab-pane fade in active" id="tab1-1">
                                                                <form class="search-dish">
                                                                    <input type="text" placeholder="Search here">
                                                                    <button type="submit"><i
                                                                            class="fa fa-search"></i></button>
                                                                </form>
                                                            <!--tenloaimonan-->
                                                                <?php
                                                                foreach ($ten_loaimonan as $rows) 
                                                                {        
                                                                ?>
                                                                <div class="dishes-list-wrapper">
                                                                    <h4 class="title3" itemprop="headline"><span
                                                                            class="sudo-bottom sudo-bg-red"><?php echo $rows['TenLoaiMonAn']; ?></span>
                                                                    </h4>
                                                                    <span class="post-rate red-bg brd-rd2"><i
                                                                            class="fa fa-star-o"></i> 4.25</span>


                                                                    <ul class="dishes-list">

                                                                    <!--Tenmonan_theoloai-->
                                                                     <!--Tenmonan_theoloai-->
                                                                     <?php
                                                                    foreach ($tenmonan_theoloai as $rows) 
                                                                    {        
                                                                    ?>
                                                                        <li class="wow fadeInUp" data-wow-delay="0.1s">
                                                                            <div class="featured-restaurant-box">
                                                                                <div class="featured-restaurant-thumb">
                                                                                    <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $rows['MaMonAn'];?>"
                                                                                        title="" itemprop="url"><img
                                                                                            src="assets/images/resource/<?php echo $rows['Avatar'];?>"
                                                                                            alt="<?php echo $rows['Avatar'];?>"
                                                                                            itemprop="image"></a>
                                                                                </div>
                                                                                <div class="featured-restaurant-info">
                                                                                    <h4 itemprop="headline"><a
                                                                                            href="food-detail.php?id=MonAn&MaMonAn=<?php echo $rows['MaMonAn'];?>"
                                                                                            title=""
                                                                                            itemprop="url"><?php echo $rows['TenMonAn']; ?></a>
                                                                                    </h4>
                                                                                    <span class="price">$85.00</span>
                                                                                    <p itemprop="description">Lorem
                                                                                        Ipsum is simply dummy text of
                                                                                        the printing industry</p>
                                                                                    <ul class="post-meta">
                                                                                        <li><i
                                                                                                class="fa fa-check-circle-o"></i>
                                                                                            Min order $50</li>
                                                                                        <li><i
                                                                                                class="flaticon-transport"></i>
                                                                                            30min</li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div class="ord-btn">
                                                                                    <a class="brd-rd2" href="#"
                                                                                        title="Order Now"
                                                                                        itemprop="url">Order Now</a>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                    </ul>


                                                                </div>
                                                                

                                                                    </ul>


                                                                </div>
                                                                <?php
                                                        }
                                                        ?>

                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-2">
                                                                <div class="restaurant-gallery">
                                                                    <h4 class="title3" itemprop="headline"><span
                                                                            class="sudo-bottom sudo-bg-red">Nik
                                                                            B</span>aker's Gallery</h4>
                                                                    <div class="remove-ext">
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a
                                                                                        href="assets/images/resource/restaurant-gallery-img1.jpg"
                                                                                        data-fancybox="gallery" title=""
                                                                                        itemprop="url"><img
                                                                                            src="assets/images/resource/restaurant-gallery-img1.jpg"
                                                                                            alt="restaurant-gallery-img1.jpg"
                                                                                            itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a
                                                                                        href="assets/images/resource/restaurant-gallery-img2.jpg"
                                                                                        data-fancybox="gallery" title=""
                                                                                        itemprop="url"><img
                                                                                            src="assets/images/resource/restaurant-gallery-img2.jpg"
                                                                                            alt="restaurant-gallery-img2.jpg"
                                                                                            itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <div class="restaurant-gallery-img"><a
                                                                                        href="assets/images/resource/restaurant-gallery-img3.jpg"
                                                                                        data-fancybox="gallery" title=""
                                                                                        itemprop="url"><img
                                                                                            src="assets/images/resource/restaurant-gallery-img3.jpg"
                                                                                            alt="restaurant-gallery-img3.jpg"
                                                                                            itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a
                                                                                        href="assets/images/resource/restaurant-gallery-img4.jpg"
                                                                                        data-fancybox="gallery" title=""
                                                                                        itemprop="url"><img
                                                                                            src="assets/images/resource/restaurant-gallery-img4.jpg"
                                                                                            alt="restaurant-gallery-img4.jpg"
                                                                                            itemprop="image"></a></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="restaurant-gallery-img"><a
                                                                                        href="assets/images/resource/restaurant-gallery-img5.jpg"
                                                                                        data-fancybox="gallery" title=""
                                                                                        itemprop="url"><img
                                                                                            src="assets/images/resource/restaurant-gallery-img5.jpg"
                                                                                            alt="restaurant-gallery-img5.jpg"
                                                                                            itemprop="image"></a></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-3">
                                                                <div class="customer-review-wrapper">
                                                                    <h4 class="title3" itemprop="headline"><span
                                                                            class="sudo-bottom sudo-bg-red">Custo</span>mer
                                                                        Reviews</h4>
                                                                    <ul class="comments-thread customer-reviews">
                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50"
                                                                                    src="assets/images/resource/review-img1.jpg"
                                                                                    alt="review-img1.jpg"
                                                                                    itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#"
                                                                                            title="" itemprop="url">John
                                                                                            Mathur</a></h4>
                                                                                    <p itemprop="description">Lorem
                                                                                        ipsum dolor sit amet, pri
                                                                                        nusquam petentium at. In mutat
                                                                                        omnes homero mea, pro delenit
                                                                                        accusam eu</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50"
                                                                                    src="assets/images/resource/review-img2.jpg"
                                                                                    alt="review-img2.jpg"
                                                                                    itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#"
                                                                                            title="" itemprop="url">John
                                                                                            Mathur</a></h4>
                                                                                    <p itemprop="description">Lorem
                                                                                        ipsum dolor sit amet, pri
                                                                                        nusquam petentium at. In mutat
                                                                                        omnes homero mea, pro delenit
                                                                                        accusam eu</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="comment">
                                                                                <img class="brd-rd50"
                                                                                    src="assets/images/resource/review-img3.jpg"
                                                                                    alt="review-img3.jpg"
                                                                                    itemprop="image">
                                                                                <div class="comment-info">
                                                                                    <h4 itemprop="headline"><a href="#"
                                                                                            title="" itemprop="url">John
                                                                                            Mathur</a></h4>
                                                                                    <p itemprop="description">Lorem
                                                                                        ipsum dolor sit amet, pri
                                                                                        nusquam petentium at. In mutat
                                                                                        omnes homero mea, pro delenit
                                                                                        accusam eu</p>
                                                                                    <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="your-review">
                                                                        <h4 class="title3" itemprop="headline"><span
                                                                                class="sudo-bottom sudo-bg-red">Write</span>
                                                                            Review Here</h4>
                                                                        <form class="review-form">
                                                                            <textarea
                                                                                class="brd-rd5">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutatomnes homero mea, pro delenit accusam eu</textarea>
                                                                            <button class="brd-rd2 red-bg"
                                                                                type="submit">POST REVIEW</button>
                                                                            <div class="rate-box">
                                                                                <span>RATE US</span>
                                                                                <div class="rating-box">
                                                                                    <span
                                                                                        class="brd-rd2 clr1 on"></span>
                                                                                    <span
                                                                                        class="brd-rd2 clr2 on"></span>
                                                                                    <span
                                                                                        class="brd-rd2 clr3 on"></span>
                                                                                    <span
                                                                                        class="brd-rd2 clr4 on"></span>
                                                                                    <span
                                                                                        class="brd-rd2 clr5 on"></span>
                                                                                    <span
                                                                                        class="brd-rd2 clr6 on"></span>
                                                                                    <span
                                                                                        class="brd-rd2 clr7 off"></span>
                                                                                    <span
                                                                                        class="brd-rd2 clr8 off"></span>
                                                                                    <i>4.0</i>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-4">
                                                                <div class="book-table">
                                                                    <h4 class="title3" itemprop="headline"><span
                                                                            class="sudo-bottom sudo-bg-red">Book</span>
                                                                        This Restaurant Table</h4>
                                                                    <form>
                                                                        <div class="row">
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i
                                                                                        class="fa fa-user"></i> <input
                                                                                        type="text" placeholder="NAME">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i
                                                                                        class="fa fa-phone"></i> <input
                                                                                        type="text" placeholder="PHONE">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="select-wrp2">
                                                                                    <select>
                                                                                        <option>Questions</option>
                                                                                        <option>Questions No 1</option>
                                                                                        <option>Questions No 2</option>
                                                                                        <option>Questions No 3</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i
                                                                                        class="fa fa-envelope"></i>
                                                                                    <input type="email"
                                                                                        placeholder="EMAIL"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i
                                                                                        class="fa fa-calendar"></i>
                                                                                    <input class="datepicker"
                                                                                        type="text"
                                                                                        placeholder="SELECT DATE"></div>
                                                                            </div>
                                                                            <div class="col-md-6 col-sm-6 col-lg-6">
                                                                                <div class="input-field brd-rd2"><i
                                                                                        class="fa fa-clock-o"></i>
                                                                                    <input class="timepicker"
                                                                                        type="text"
                                                                                        placeholder="SELECT Time"></div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <div class="textarea-field brd-rd2"><i
                                                                                        class="fa fa-pencil"></i>
                                                                                    <textarea
                                                                                        placeholder="Your Instruction"></textarea>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <button class="brd-rd2 red-bg"
                                                                                    type="submit">POST PREVIEW</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane fade" id="tab1-5">
                                                                <div class="restaurant-info-wrapper">
                                                                    <h3 class="title3" itemprop="headline"><span
                                                                            class="sudo-bottom sudo-bg-red">Book</span>
                                                                        This Restaurant Table</h3>
                                                                    <div class="loc-map" id="loc-map"></div>
                                                                    <ul class="restaurant-info-list">
                                                                        <li>
                                                                            <i class="fa fa-map-marker red-clr"></i>
                                                                            <strong>Address :</strong>
                                                                            <span>2nd Street, East-West Mansion Flat A2
                                                                                231 Newyork NY 10003</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-phone red-clr"></i>
                                                                            <strong>Call us & Hire us</strong>
                                                                            <span>+32 (0) 598 65 8968</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-envelope-o red-clr"></i>
                                                                            <strong>Have any questions?</strong>
                                                                            <span>Support@webinane.com</span>
                                                                        </li>
                                                                        <li>
                                                                            <i class="fa fa-fax red-clr"></i>
                                                                            <strong>Fax</strong>
                                                                            <span>+652 235 89658965</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12 col-lg-4">
                                            <div class="order-wrapper right wow fadeIn" data-wow-delay="0.2s">
                                                <div class="order-inner gradient-brd">
                                                    <h4 itemprop="headline">Your Order</h4>
                                                    <div class="order-list-wrapper">
                                                        <ul class="order-list-inner">
                                                            <li>
                                                                <div class="dish-name">
                                                                    <i>.1</i>
                                                                    <h6 itemprop="headline">Chicken Tandoori Special
                                                                    </h6> <span class="price">$85.00</span>
                                                                </div>
                                                                <div class="dish-ingredients">
                                                                    <span class="check-box"><input type="checkbox"
                                                                            id="checkbox1-1"><label
                                                                            for="checkbox1-1"><span>Drink</span>
                                                                            <i>$12</i></label></span>
                                                                    <span class="check-box"><input type="checkbox"
                                                                            id="checkbox1-2"><label
                                                                            for="checkbox1-2"><span>Butter</span>
                                                                            <i>$12</i></label></span>
                                                                </div>
                                                                <div class="mor-ingredients">
                                                                    <a class="red-clr" href="#" title=""
                                                                        itemprop="url">Edit</a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dish-name">
                                                                    <i>.2</i>
                                                                    <h6 itemprop="headline">Chicken Tandoori Special
                                                                    </h6> <span class="price">$90.00</span>
                                                                </div>
                                                                <div class="dish-ingredients">
                                                                    <span class="check-box"><input type="checkbox"
                                                                            id="checkbox2-1"><label
                                                                            for="checkbox2-1"><span>Drink</span>
                                                                            <i>$10</i></label></span>
                                                                    <span class="check-box"><input type="checkbox"
                                                                            id="checkbox2-2"><label
                                                                            for="checkbox2-2"><span>Butter</span>
                                                                            <i>$20</i></label></span>
                                                                </div>
                                                                <div class="mor-ingredients">
                                                                    <a class="red-clr" href="#" title=""
                                                                        itemprop="url">Edit</a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="dish-name">
                                                                    <i>.3</i>
                                                                    <h6 itemprop="headline">Chicken Tandoori Special
                                                                    </h6> <span class="price">$100.00</span>
                                                                </div>
                                                                <div class="dish-ingredients">
                                                                    <span class="check-box"><input type="checkbox"
                                                                            id="checkbox3-1"><label
                                                                            for="checkbox3-1"><span>Drink</span>
                                                                            <i>$30</i></label></span>
                                                                </div>
                                                                <div class="mor-ingredients">
                                                                    <a class="red-clr" href="#" title=""
                                                                        itemprop="url">Edit</a>
                                                                    <div class="ingradient-list yellow-bg">
                                                                        <span class="check-box"><input type="checkbox"
                                                                                id="checkbox4-1"><label
                                                                                for="checkbox4-1"><span>Extra
                                                                                    Drink</span></label></span>
                                                                        <span class="check-box"><input type="checkbox"
                                                                                id="checkbox4-2"><label
                                                                                for="checkbox4-2"><span>Extra
                                                                                    Drink</span></label></span>
                                                                        <span class="check-box"><input type="checkbox"
                                                                                id="checkbox4-3"><label
                                                                                for="checkbox4-3"><span>Extra
                                                                                    Drink</span></label></span>
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
                                                            <li><span class="radio-box cash-popup-btn"><input
                                                                        type="radio" name="method" id="pay1-1"><label
                                                                        for="pay1-1"><i class="fa fa-money"></i>
                                                                        Cash</label></span> <span
                                                                    class="radio-box card-popup-btn"><input type="radio"
                                                                        name="method" id="pay1-2"><label for="pay1-2"><i
                                                                            class="fa fa-credit-card-alt"></i>
                                                                        Card</label></span></li>
                                                            <li><a class="brd-rd2" href="#" title=""
                                                                    itemprop="url">CONFIRM ORDER</a></li>
                                                        </ul>
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

        <div class="payment-popup-wrapper cash-method text-center">
            <div class="payment-popup-inner" style="background-image: url(assets/images/payment-popup-bg.jpg);">
                <a class="payment-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <h4 class="payment-popup-title" itemprop="headline"><i class="fa fa-money red-clr"></i> Cash Payment
                </h4>
                <div class="payment-popup-info">
                    <h5 itemprop="headline">Billing Details</h5>
                    <form class="payment-popup-info-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <ul class="payment-info-list">
                                    <li><span>Name:</span> John Smith</li>
                                    <li><span>Email:</span> john@domain.com</li>
                                    <li><span>Phone:</span> 0231456879</li>
                                    <li><span>Country:</span> India</li>
                                    <li><span>Address:</span> 121 King Street Melbourne Victoria Austrailia <a
                                            class="red-clr" href="#" title="" itemprop="url"><i
                                                class="fa fa-pencil"></i> Edit</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Order Note <sup>*</sup></label>
                                <textarea class="brd-rd3" placeholder="Description..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="confrm-order red-bg">
                    <ul class="order-total">
                        <li><span>SubTotal</span> <i>$158</i></li>
                        <li><span>Delivery fee</span> <i>$70</i></li>
                        <li><span>Tax</span> <i>$12</i></li>
                    </ul>
                    <div class="confrm-order-btn">
                        <a class="brd-rd3" href="#" title="" itemprop="url">CONFIRM ORDER</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="payment-popup-wrapper card-method text-center">
            <div class="payment-popup-inner" style="background-image: url(assets/images/payment-popup-bg.jpg);">
                <a class="payment-close-btn" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <h4 class="payment-popup-title" itemprop="headline"><i class="fa fa-money red-clr"></i> Card Payment
                </h4>
                <div class="payment-popup-info">
                    <h5 itemprop="headline">Billing Details</h5>
                    <form class="payment-popup-info-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <ul class="payment-info-list">
                                    <li><span>Name:</span> John Smith</li>
                                    <li><span>Email:</span> john@domain.com</li>
                                    <li><span>Phone:</span> 0231456879</li>
                                    <li><span>Country:</span> India</li>
                                    <li><span>Address:</span> 121 King Street Melbourne Victoria Austrailia <a
                                            class="red-clr" href="#" title="" itemprop="url"><i
                                                class="fa fa-pencil"></i> Edit</a></li>
                                </ul>
                                <h5 itemprop="headline">Payment Method</h5>
                                <ul class="payment-method">
                                    <li>
                                        <div class="radio-box">
                                            <input type="radio" name="mthd22" id="mthd2-1">
                                            <label for="mthd2-1"><img src="assets/images/card-img.jpg"
                                                    alt="card-img.jpg" itemprop="image"></label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="radio-box">
                                            <input type="radio" name="mthd22" id="mthd2-2">
                                            <label for="mthd2-2"><img src="assets/images/bank-img.jpg"
                                                    alt="bank-img.jpg" itemprop="image"></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-6">
                                <label>Order Note <sup>*</sup></label>
                                <textarea class="brd-rd3" placeholder="Description..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="confrm-order red-bg">
                    <ul class="order-total">
                        <li><span>SubTotal</span> <i>$158</i></li>
                        <li><span>Delivery fee</span> <i>$70</i></li>
                        <li><span>Tax</span> <i>$12</i></li>
                    </ul>
                    <div class="confrm-order-btn">
                        <a class="brd-rd3" href="#" title="" itemprop="url">CONFIRM ORDER</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="payment-popup-wrapper thanks-message text-center">
            <div class="payment-popup-inner red-bg">
                <a class="thanks-close" href="#" title="" itemprop="url"><i class="fa fa-close"></i></a>
                <i><img src="assets/images/tick-icon.png" alt="tick-icon.png" itemprop="image"></i>
                <h3 itemprop="headline">Thanks For Your Order</h3>
                <p itemprop="description">You Will Receive an email Confirmation Shortly at <a href="#" title=""
                        itemprop="url">info@domain.com</a></p>
                <img class="thanks-message-mockup right" src="assets/images/resource/thanks-message-mockup.png"
                    alt="thanks-message-mockup.png" itemprop="image">
            </div>
        </div>
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="assets/js/google-map-int.js"></script>
    <script src="../../www.google.com/recaptcha/api.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>