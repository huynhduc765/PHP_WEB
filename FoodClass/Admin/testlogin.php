<?php
session_start();
ob_start();

//require "../entities/Admin.class.php";
//require "../Block/Connect.php";
?>
<?php

// kiem tra dang nhap
 if(isset($_POST["btnlogin"]))
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
    // truy van
    $sql ="SELECT * from Admin
    where TenDangNhap =$un
    and MatKhau = $pa
  ";
     $user = mysqli_query($conn,$sql);

if(mysqli_num_rows($user)==1) {
    $row = mysqli_fetch_array($user);
    $_SESSION["Name"] = $row ["Name"];
   $_SESSION["TenDangNhap"] = $row ["TenDangNhap"];
     return header('Location: Dashboard.php');
exit;
   }
   else{
   echo " <script> alert('Tên đăng nhập và mật khẩu không đúng, vui lòng thử lại') </script>";


}
}
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link href="assets/global/plugins/bootstrap/dist/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
    <link href="assets/global/plugins/Waves/dist/waves.min.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/icons_fonts/font-awesome/css/font-awesome.min.css"/>
    <link href="assets/pages/login/css/user_login_v2.css" type="text/css" rel="stylesheet"/>
    <link rel="icon" href="assets/favicon/prince.ico" type="image/x-icon"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/styles/metro/notify-metro.css" />


    


</head>
<body>

<div class="login-background">
    <div class="login-left-section">
        <img src="../Images/logo.png" alt="logo-image">
        <h2>Admin</h2>
        <p>Cổng quản trị hệ thống</p>
    </div>
    <!--  START LOGIN -->
    <div class="login-page">
        <div class="main-login-contain">
            <div class="login-form">
                <form id="form-validation" method="post">
                    <h4>Đăng nhập hệ thống</h4>
                    <p class="login-title-text">Vui lòng nhập thông tin</p>
                    <div class="form-group">
                        <input required="required"  type="text" id= "txtTen" name = "txtTen">
                        <label class="control-label" for="input-username">Enter username</label><i class="bar"></i>
                    </div>
                    <div class="form-group">
                        <input required="required" type="password" id="txtPass" name="txtPass">
                        <label class="control-label" for="input-password">Enter password</label><i class="bar"></i>
                    </div>

                    <div class="goto-login">
                        
                        <button type="submit" name="btnlogin" id ="btnlogin" class="btn btn-login float-button-light">Đăng nhập</button>
                    </div>

                


                </form>
            </div>
        </div>
    </div>
    <!--  END LOGIN -->
</div>

<!-- START CORE JAVASCRIPT -->
<script src="assets/global/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/global/plugins/Waves/dist/waves.min.js"></script>
<!-- END CORE JAVASCRIPT -->

<!-- START PAGE JAVASCRIPT -->
<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }

    !(function ($) {
        if (typeof Waves !== 'undefined') {
            Waves.attach('.float-button-light', ['waves-button', 'waves-float', 'waves-light']);
            Waves.init();
        }
    })(jQuery);
</script>
<!-- END PAGE JAVASCRIPT -->

</body>
</html>