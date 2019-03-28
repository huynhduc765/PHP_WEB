<?php
    include_once("../test.php");
?>
<?php
  if(isset($_SESSION['user'])!=""){
    header("Location: test.php");
}
  //require_once("../entities/User.class.php");
//require_once("../entities/config/db.class.php");

  if(isset($_POST['btn-signup']))
  {
    //$ten_taikhoan=$_POST['txtname'];
    //$email=$_POST['txtemail'];
    //$mat_khau=$_POST['txtpassword'];
    


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

    $ten_taikhoan=$_POST['txtname'];
    $email=$_POST['txtemail'];
    $mat_khau=$_POST['txtpassword'];
    
    $sql ="INSERT INTO TaiKhoan(TenTaiKhoan,Email,MatKhau) VALUES
    (
        $ten_taikhoan,$email, $mat_khau
    )
     ";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

mysqli_close($conn);

 
  }
  ?>
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
                                <input class="brd-rd3" name="txtname" type="text" placeholder="Username">
                            </div>
                           
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" name="txtpassword" type="password" placeholder="Password">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <input class="brd-rd3" name="txtemail" type="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 col-sm-12 col-lg-12">
                                <button class="red-bg brd-rd3" name="btn-signup" type="submit">REGISTER NOW</button>
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