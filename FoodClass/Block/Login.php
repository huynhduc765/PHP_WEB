<?php
session_start();
ob_start();

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
    $un = $_POST["txtTen"];
    $pa = $_POST["txtPass"];
    // truy van admin
    $sql ="SELECT * from TaiKhoan
    where TenTaiKhoan =$un
    and MatKhau = $pa
  ";
     $user = mysqli_query($conn,$sql);

if(mysqli_num_rows($user)==1) {
    //Luu sesion
    $row = mysqli_fetch_array($user);
    $_SESSION["TenHienThi"] = $row ["TenHienThi"];
   $_SESSION["TenTaiKhoan"] = $row ["TenTaiKhoan"];
     return header('Location: index.php');
exit;
   }
   else{
   echo " <script> alert('Tên đăng nhập và mật khẩu không đúng, vui lòng thử lại') </script>";


}
}
   
?> 
<!--Login-->
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
                                <input class="brd-rd3" type="text" placeholder="Username" name="txtTen">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" type="password" placeholder="Password" name="txtPas">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" name="DangNhap" type="submit">SIGN IN</button>
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

        <!--Login-->