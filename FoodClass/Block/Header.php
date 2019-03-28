<!-- <?php 
session_start();

//require_once ("SignUp/insertuser.php");
?>
<?php

// kiem tra dang nhap
 if(isset($_POST["DangNhap"]))
 {
  
    $servername = "localhost";
    $username = "admin";
    $password = "M@tkh4u1";
    $dbname = "QuanLyQuanAn";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    mysqli_set_charset($conn, 'UTF8');
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $un = $_POST["Ten"];
    $pa = $_POST["Pass"];
    // truy van admin
    $sql ="SELECT * from TaiKhoan
    where TenTaiKhoan =$un
    and MatKhau = $pa
  ";
     $user = mysqli_query($conn,$sql);

     
if(mysqli_num_rows($user)==1) {
    //Luu sesion
    $row = mysqli_fetch_array($user);
   $_SESSION["TenTaiKhoan"] = $row["TenTaiKhoan"];
   }
   else{
   echo " <script> alert('Tên đăng nhập và mật khẩu không đúng, vui lòng thử lại') </script>";


}
}
if(isset($_SESSION["TenTaiKhoan"])) {
    header("Location:index.php");
    }  
?> 

 -->


        <header class="stick">
            <div class="topbar">
                <div class="container">
                    <div class="select-wrp">
                        <select data-placeholder="Feel Like Eating">
                            <option>FEEL LIKE EATING</option>
                            <option>Burger</option>
                            <option>Pizza</option>
                            <option>Fried Rice</option>
                            <option>Chicken Shots</option>
                        </select>
                    </div>
                    <div class="select-wrp">
                        <select data-placeholder="Choose Location">
                            <option>CHOOSE LOCATION</option>
                            <option>New york</option>
                            <option>Washington</option>
                            <option>Chicago</option>
                            <option>Los Angeles</option>
                        </select>
                    </div>
                    <div class="topbar-register">     
              <!--  
                  if$_SESSION"TenTaiKhoan"-->

                   <!-- <a class="log-popup-btn" href="#" title="Login" itemprop="url"><?php echo $_SESSION["TenTaiKhoan"]; ?></a>  
                -->
                
  <a class="log-popup-btn" href="#" title="Login" itemprop="url">Đăng Nhập</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">Đăng Ký</a>                
              
                </div>
                    <div class="social1">
                        <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                        <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                    </div>
                </div>                
            </div><!-- Topbar -->
            <div class="logo-menu-sec">
                <div class="container">
                    <div class="logo"><h1 itemprop="headline"><a href="index.php" title="Home" itemprop="url"><img src="assets/images/logo2.png" alt="logo.png" itemprop="image"></a></h1></div>
                    <nav>
                        <div class="menu-sec">
                            <ul>
                                <li class="menu-item-has-children"><a href="index.php" title="HOMEPAGES" itemprop="url"><span class="red-clr">FOOD ORDERING</span>HOMEPAGES</a>
                                
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="RESTAURANTS" itemprop="url"><span class="red-clr">REAL FOOD</span>RESTAURANTS</a>
                                    <ul class="sub-dropdown">
                                    <!--    >-->
                                        <li><a href="restaurant-found2.php" title="RESTAURANT 2" itemprop="url">RESTAURANT 2</a></li>
                                        <li><a href="restaurant-detail.php" title="RESTAURANT DETAILS" itemprop="url">RESTAURANT DETAILS</a></li>
                                        <li><a href="food-recipes.php" title="RESTAURANT DETAILS" itemprop="url">FOOD RECIPES</a></li>
                                                <li><a href="our-menu.php" title="RESTAURANT DETAILS" itemprop="url">OUR MENU</a></li>
                                        <li><a href="our-services.php" title="RESTAURANT DETAILS" itemprop="url">OUR SERVICES</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="PAGES" itemprop="url"><span class="red-clr">REAL FOOD</span>PAGES</a>
                                    <ul class="sub-dropdown">
                                        <li class="menu-item-has-children"><a href="#" title="BLOG" itemprop="url">BLOG</a>
                                            <ul class="sub-dropdown">
                                                <li class="menu-item-has-children"><a href="#" title="BLOG LAYOUTS" itemprop="url">BLOG LAYOUTS</a>
                                                    <ul class="sub-dropdown">
                                                        <li><a href="blog-right-sidebar.php" title="BLOG WITH RIGHT SIDEBAR" itemprop="url">BLOG (W.R.S)</a></li>
                                                        <li><a href="blog-left-sidebar.php" title="BLOG WITH LEFT SIDEBAR" itemprop="url">BLOG (W.L.S)</a></li>
                                                        <li><a href="blog.php" title="BLOG WITH NO SIDEBAR" itemprop="url">BLOG</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#" title="BLOG DETAIL" itemprop="url">BLOG DETAIL</a>
                                                    <ul class="sub-dropdown">
                                                        <li><a href="blog-detail-right-sidebar.php" title="BLOG DETAIL WITH RIGHT SIDEBAR" itemprop="url">BLOG DETAIL (W.R.S)</a></li>
                                                        <li><a href="blog-detail-left-sidebar.php" title="BLOG DETAIL WITH LEFT SIDEBAR" itemprop="url">BLOG DETAIL (W.L.S)</a></li>
                                                        <li><a href="blog-detail.php" title="BLOG DETAIL WITH NO SIDEBAR" itemprop="url">BLOG DETAIL</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children"><a href="#" title="BLOG FORMATES" itemprop="url">BLOG FORMATES</a>
                                                    <ul class="sub-dropdown">
                                                        <li><a href="blog-detail-video.php" title="BLOG DETAIL WITH VIDEO" itemprop="url">BLOG DETAIL (VIDEO)</a></li>
                                                        <li><a href="blog-detail-audio.html.php" title="BLOG DETAIL WITH AUDIO" itemprop="url">BLOG DETAIL (AUDIO)</a></li>
                                                        <li><a href="blog-detail-carousel.php" title="BLOG DETAIL WITH CAROUSEL" itemprop="url">BLOG DETAIL (CAROUSEL)</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="SPECIAL PAGES" itemprop="url">SPECIAL PAGES</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="404.php" title="404 ERROR" itemprop="url">404 ERROR</a></li>
                                                <li><a href="search-found.php" title="SEARCH FOUND" itemprop="url">SEARCH FOUND</a></li>
                                                <li><a href="search-not-found.php" title="SEARCH NOT FOUND" itemprop="url">SEARCH NOT FOUND</a></li>
                                                <li><a href="coming-soon.php" title="COMING SOON" itemprop="url">COMING SOON</a></li>
                                                <li><a href="login-register.php" title="LOGIN & REGISTER" itemprop="url">LOGIN & REGISTER</a></li>
                                                <li><a href="price-table.html" title="PRICE TABLE" itemprop="url">PRICE TABLE</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="register-reservation.php" title="REGISTER RESERVATION" itemprop="url">REGISTER RESERVATION</a></li>
                                        <li><a href="dashboard.php" title="USER PROFILE" itemprop="url">USER PROFILE</a></li>
                                        <li><a href="about-us.html" title="ABOUT US" itemprop="url">ABOUT US</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.php" title="CONTACT US" itemprop="url"><span class="red-clr">REAL FOOD</span>CONTACT US</a></li>
                            </ul>
                            <a class="red-bg brd-rd4" href="register-reservation.php" title="Register" itemprop="url">REGISTER RESTAURANT</a>
                        </div>
                    </nav><!-- Navigation -->
                </div>
            </div><!-- Logo Menu Section -->
        </header><!-- Header -->

        <div class="responsive-header">
            <div class="responsive-topbar">
                <div class="select-wrp">
                    <select data-placeholder="Feel Like Eating">
                        <option>FEEL LIKE EATING</option>
                        <option>Burger</option>
                        <option>Pizza</option>
                        <option>Fried Rice</option>
                        <option>Chicken Shots</option>
                    </select>
                </div>
                <div class="select-wrp">
                    <select data-placeholder="Choose Location">
                        <option>CHOOSE LOCATION</option>
                        <option>New york</option>
                        <option>Washington</option>
                        <option>Chicago</option>
                        <option>Los Angeles</option>
                    </select>
                </div>
            </div>
            <div class="responsive-logomenu">
                <div class="logo"><h1 itemprop="headline"><a href="index.php" title="Home" itemprop="url"><img src="assets/images/logo.png" alt="logo.png" itemprop="image"></a></h1></div>
                <span class="menu-btn yellow-bg brd-rd4"><i class="fa fa-align-justify"></i></span>
            </div>
            <div class="responsive-menu">
                <span class="menu-close red-bg brd-rd3"><i class="fa fa-close"></i></span>
                <div class="menu-lst">
                    <ul>
                        <li class="menu-item-has-children"><a href="index.php" title="HOMEPAGES" itemprop="url"><span class="yellow-clr">FOOD ORDERING</span>HOMEPAGES</a>
                           
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="RESTAURANTS" itemprop="url"><span class="yellow-clr">REAL FOOD</span>RESTAURANTS</a>
                            <ul class="sub-dropdown">
                            <!--    >-->
                                <li><a href="restaurant-found2.php" title="RESTAURANT 2" itemprop="url">RESTAURANT 2</a></li>
                                <li><a href="restaurant-detail.php" title="RESTAURANT DETAILS" itemprop="url">RESTAURANT DETAILS</a></li>
                                <li><a href="food-recipes.php" title="RESTAURANT DETAILS" itemprop="url">FOOD RECIPES</a></li>
                                <li><a href="our-menu.php" title="RESTAURANT DETAILS" itemprop="url">OUR MENU</a></li>
                                <li><a href="our-services.php" title="RESTAURANT DETAILS" itemprop="url">OUR SERVICES</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><a href="#" title="PAGES" itemprop="url"><span class="yellow-clr">REAL FOOD</span>PAGES</a>
                            <ul class="sub-dropdown">
                                <li class="menu-item-has-children"><a href="#" title="BLOG" itemprop="url">BLOG</a>
                                    <ul class="sub-dropdown">
                                        <li class="menu-item-has-children"><a href="#" title="BLOG LAYOUTS" itemprop="url">BLOG LAYOUTS</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="blog-right-sidebar.php" title="BLOG WITH RIGHT SIDEBAR" itemprop="url">BLOG (W.R.S)</a></li>
                                                <li><a href="blog-left-sidebar.php" title="BLOG WITH LEFT SIDEBAR" itemprop="url">BLOG (W.L.S)</a></li>
                                                <li><a href="blog.php" title="BLOG WITH NO SIDEBAR" itemprop="url">BLOG</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="BLOG DETAIL" itemprop="url">BLOG DETAIL</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="blog-detail-right-sidebar.php" title="BLOG DETAIL WITH RIGHT SIDEBAR" itemprop="url">BLOG DETAIL (W.R.S)</a></li>
                                                <li><a href="blog-detail-left-sidebar.html" title="BLOG DETAIL WITH LEFT SIDEBAR" itemprop="url">BLOG DETAIL (W.L.S)</a></li>
                                                <li><a href="blog-detail.php" title="BLOG DETAIL WITH NO SIDEBAR" itemprop="url">BLOG DETAIL</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><a href="#" title="BLOG FORMATES" itemprop="url">BLOG FORMATES</a>
                                            <ul class="sub-dropdown">
                                                <li><a href="blog-detail-video.php" title="BLOG DETAIL WITH VIDEO" itemprop="url">BLOG DETAIL (VIDEO)</a></li>
                                                <li><a href="blog-detail-audio.html.php" title="BLOG DETAIL WITH AUDIO" itemprop="url">BLOG DETAIL (AUDIO)</a></li>
                                                <li><a href="blog-detail-carousel.php" title="BLOG DETAIL WITH CAROUSEL" itemprop="url">BLOG DETAIL (CAROUSEL)</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#" title="SPECIAL PAGES" itemprop="url">SPECIAL PAGES</a>
                                    <ul class="sub-dropdown">
                                        <li><a href="404.php" title="404 ERROR" itemprop="url">404 ERROR</a></li>
                                        <li><a href="search-found.php" title="SEARCH FOUND" itemprop="url">SEARCH FOUND</a></li>
                                        <li><a href="search-not-found.php" title="SEARCH NOT FOUND" itemprop="url">SEARCH NOT FOUND</a></li>
                                        <li><a href="coming-soon.php" title="COMING SOON" itemprop="url">COMING SOON</a></li>
                                        <li><a href="login-register.php" title="LOGIN & REGISTER" itemprop="url">LOGIN & REGISTER</a></li>
                                        <li><a href="price-table.html" title="PRICE TABLE" itemprop="url">PRICE TABLE</a></li>
                                    </ul>
                                </li>
                             
                                <li><a href="register-reservation.php" title="REGISTER RESERVATION" itemprop="url">REGISTER RESERVATION</a></li>
                                <li><a href="how-it-works.html" title="HOW IT WORKS" itemprop="url">HOW IT WORKS</a></li>
                                <li><a href="dashboard.php" title="USER PROFILE" itemprop="url">USER PROFILE</a></li>
                                <li><a href="about-us.html" title="ABOUT US" itemprop="url">ABOUT US</a></li>
                                <li><a href="food-detail.html" title="FOOD DETAIL" itemprop="url">FOOD DETAIL</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php" title="CONTACT US" itemprop="url"><span class="yellow-clr">REAL FOOD</span>CONTACT US</a></li>
                    </ul>
                </div>

                <div class="topbar-register">     
              <!--  
                  if$_SESSION"TenTaiKhoan"-->

                   <!-- <a class="log-popup-btn" href="#" title="Login" itemprop="url"><?php echo $_SESSION["TenTaiKhoan"]; ?></a>  
                -->
                
  <a class="log-popup-btn" href="#" title="Login" itemprop="url">Đăng Nhập</a> / <a class="sign-popup-btn" href="#" title="Register" itemprop="url">Đăng Ký</a>                
              
                </div>

                <div class="social1">
                    <a href="#" title="Facebook" itemprop="url" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="#" title="Twitter" itemprop="url" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" title="Google Plus" itemprop="url" target="_blank"><i class="fa fa-google-plus"></i></a>
                </div>
                <div class="register-btn">
                    <a class="yellow-bg brd-rd4" href="register-reservation.php" title="Register" itemprop="url">REGISTER RESTAURANT</a>
                </div>
            </div><!-- Responsive Menu -->
        </div><!-- Responsive Header -->

 
<!--Login-->

<?php
      require('Login/form.php');
      ?>


<?php
      require('SignUp/form.php');
      ?>

<!--SignUp-->