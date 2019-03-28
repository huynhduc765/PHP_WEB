<?php
  require_once("entities/Restaurant.class.php");
  require_once("entities/Product.class.php");

  if(isset($_GET["id"]) )
    $id = $_GET["id"];
else    
    $id="";
 ?>
<?php

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
                                                        
                                               



                                                    <div class="restaurant-detail-tabs">
                                                 

                                                        <div class="tab-content">
                                                            <div class="tab-pane fade in active" id="tab1-1">
                                                                <form class="search-dish">
                                                                    <input type="text" placeholder="Search here">
                                                                    <button type="submit"><i
                                                                            class="fa fa-search"></i></button>
                                                                </form>
                                                            <!--tenloaimonan-->
                                                                <?php
                                                                foreach ($tenmonan_theoloai as $rows) 
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