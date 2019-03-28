<?php
    require_once("entities/Product.class.php");
    if(isset($_GET["id"]) )
    $id = $_GET["id"];
else    
    $id="";
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
                            <h1 itemprop="headline">Our Receipes</h1>
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
                    <li class="breadcrumb-item active">Receipes</li>
                </ol>
            </div>
        </div>

        <section>
            <div class="block less-spacing gray-bg top-padd30">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="sec-box">
                                <div class="filters-wrapper">
                                    <ul class="filter-buttons center">
                                        <li class="active"><a class="brd-rd30" data-filter="*" href="#"
                                                itemprop="url">All</a></li>
                                        <li><a class="brd-rd30" data-filter=".filter-item1" href="#" itemprop="url">Món
                                                Chính</a></li>
                                        <li><a class="brd-rd30" data-filter=".filter-item2" href="#" itemprop="url">Món
                                                phụ</a></li>
                                        <li><a class="brd-rd30" data-filter=".filter-item3" href="#" itemprop="url">Giải
                                                khát</a></li>
                                        <li><a class="brd-rd30" data-filter=".filter-item4" href="#" itemprop="url">Giải
                                                khát</a></li>

                                    </ul><!-- Filter Buttons -->
                                    <div class="filters-inner style2">

                                    <?php
                                  foreach ($prods as $item) {

                                    ?>
                                        <div class="row">
                                            <div class="masonry">
                                                <div class="col-md-12 col-sm-12 col-lg-6 filter-item filter-item1">
                                                    <div class="featured-restaurant-box wow fadeIn"
                                                        data-wow-delay="0.2s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                title="" itemprop="url"><img class="brd-rd50"
                                                                    src="assets/images/resource/<?php echo $item['Avatar'];?>"
                                                                    alt="<?php echo $item['Avatar'];?>"
                                                                    itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline">
                                                            <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                    title=""
                                                                    itemprop="url"><?php echo $item['TenMonAn']; ?></a>
                                                            </h4>
                                                            <span class="price"><?php echo $item['GiaTien'];?></span>

                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50
                                                                </li>
                                                                <!--<li><i class="flaticon-transport"></i> 30min</li>-->
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.25</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 col-sm-12 col-lg-6 filter-item filter-item2">
                                                    <div class="featured-restaurant-box wow fadeIn"
                                                        data-wow-delay="0.3s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                title="" itemprop="url"><img class="brd-rd50"
                                                                    src="assets/images/resource/<?php echo $item['Avatar'];?>"
                                                                    alt="<?php echo $item['Avatar'];?>"
                                                                    itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a
                                                                    href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                    title=""
                                                                    itemprop="url"><?php echo $item['TenMonAn']; ?></a>
                                                            </h4>
                                                            <span class="price"><?php echo $item['GiaTien'];?></span>

                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $40
                                                                </li>
                                                                <!--	<li><i class="flaticon-transport"></i> 20min</li> -->
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.03</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-lg-6 filter-item filter-item3">
                                                    <div class="featured-restaurant-box wow fadeIn"
                                                        data-wow-delay="0.3s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                title="" itemprop="url"><img class="brd-rd50"
                                                                    src="assets/images/resource/<?php echo $item['Avatar'];?>"
                                                                    alt="<?php echo $item['Avatar'];?>"
                                                                    itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a
                                                                    href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                    title=""
                                                                    itemprop="url"><?php echo $item['TenMonAn']; ?></a>
                                                            </h4>
                                                            <span class="price"><?php echo $item['GiaTien'];?></span>

                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $60
                                                                </li>
                                                                <!--<li><i class="flaticon-transport"></i> 45min</li>-->
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 5.00</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-md-12 col-sm-12 col-lg-6 filter-item filter-item2 filter-item3">
                                                    <div class="featured-restaurant-box wow fadeIn"
                                                        data-wow-delay="0.4s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                title="" itemprop="url"><img class="brd-rd50"
                                                                    src="assets/images/resource/<?php echo $item['Avatar'];?>"
                                                                    alt="<?php echo $item['Avatar'];?>"
                                                                    itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="food-detail.php?id="
                                                                    title=""
                                                                    itemprop="url"><?php echo $item['TenMonAn']; ?></a>
                                                            </h4>
                                                            <span class="price"><?php echo $item['GiaTien'];?></span>

                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50
                                                                </li>
                                                                <!--<li><i class="flaticon-transport"></i> 30min</li>-->
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.25</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-md-12 col-sm-12 col-lg-6 filter-item filter-item1 filter-item3">
                                                    <div class="featured-restaurant-box wow fadeIn"
                                                        data-wow-delay="0.5s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                title="" itemprop="url"><img class="brd-rd50"
                                                                    src="assets/images/resource/<?php echo $item['Avatar'];?>"
                                                                    alt="<?php echo $item['Avatar'];?>"
                                                                    itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="food-detail.php?id="
                                                                    title=""
                                                                    itemprop="url"><?php echo $item['TenMonAn']; ?></a>
                                                            </h4>
                                                            <span class="price"><?php echo $item['GiaTien'];?></span>

                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $40
                                                                </li>
                                                                <!--<li><i class="flaticon-transport"></i> 20min</li>-->
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.03</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="col-md-12 col-sm-12 col-lg-6 filter-item filter-item1 filter-item2">
                                                    <div class="featured-restaurant-box wow fadeIn"
                                                        data-wow-delay="0.6s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                title="" itemprop="url"><img class="brd-rd50"
                                                                    src="assets/images/resource/<?php echo $item['Avatar'];?>"
                                                                    alt="<?php echo $item['Avatar'];?>"
                                                                    itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a
                                                                    href="food-detail.php?id=MonAn&MaMonAn=<?php echo $item['MaMonAn'];?>"
                                                                    title=""
                                                                    itemprop="url"><?php echo $item['TenMonAn']; ?></a>
                                                            </h4>
                                                            <span class="price"><?php echo $item['GiaTien'];?></span>

                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $60
                                                                </li>
                                                                <!--<li><i class="flaticon-transport"></i> 45min</li>-->
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 5.00</span>
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
                        </div>
                    </div>
                </div>
            </div>
        </section>

  <!--Footer-->
  <?php
      require('./Block/Footer.php');
      ?>
      <!--Footer-->>

        

     
    </main><!-- Main Wrapper -->

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>