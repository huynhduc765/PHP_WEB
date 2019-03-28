<?php 
session_start();
require "../../Db/Connect.php";
require "../../Db/function.php";
?>
<?php 
$id_khachhang = $_GET["id_khachhang"];
settype($id_khachhang, "int");
$row_tk = chitietthongtintaikhoan($id_khachhang);
?>

<?php
if(isset($_POST["btncapnhat"]))
{
$tenkhachhang = $_POST['tenkhachhang'];
$email = $_POST['email'];
$matkhau = $_POST['matkhau'];
$dienthoai = $_POST['dienthoai'];
$diachinhan = $_POST['diachinhan'];
$tendangnhap = $_POST['tendangnhap'];
echo 
$sql ="UPDATE dangky SET
       tenkhachhang= '$tenkhachhang',
       email ='$email',
       matkhau ='$matkhau',
       dienthoai ='$dienthoai',
       diachinhan = '$diachinhan',
       tendangnhap = '$tendangnhap'
       where id_khachhang='$id_khachhang'
";
	mysql_query($sql);
    header('Location: index.php');
 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/global/plugins/Waves/dist/waves.min.css"/>
    <link rel="stylesheet" href="../assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../assets/icons_fonts/font-awesome/css/font-awesome.min.css"/>
    <link href="../assets/global/css/components.min.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" href="../assets/layouts/layouts_left_menu/left_menu_layout.min.css"/>
    <link rel="icon" href="../assets/favicon/prince.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="192x192" href="../assets/favicon/prince-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/prince-180x180.png">

</head>
<body class="nav-medium">
<div class="container body">
    <div class="main_container">
<div class="page-loader">
    <div class="preloader loading">
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
        <span class="slice"></span>
    </div>
</div>

<a href="javascript:" id="scroll" style="display: none;"><span></span></a>

<?php  require('../../Block/Admin/LeftMenu.php')?>
<div class="top_nav">
<?php require('../../Block/Admin/TopMenu.php') ?>

</div>
<div class="clearfix"></div>
<!-- End top navigation -->
    <!-- Start Contain Section -->
    <div class="container-fluid right_color">
        <div class="page-main-header">
            <!-- Page Title -->
            <h2 class="page-name-title">Tạo tài khoản khách hàng</h2>
         
        </div>

        <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Thông tin tài khoản</h2>
                        </div>
                        <form method="POST" enctype="multipart/form-data" class="section-body">

                         

                            <div class="form-item">
                                <p class="formLabel">Họ và tên</p>
                                <input  value="<?php echo $row_tk['tenkhachhang'] ?>" type="text"  name="tenkhachhang" class="form-style focus"/>
                            </div>

                            <div class="form-item">
                                <p class="formLabel">Điện thoại</p>
                                <input type="text" value="<?php echo $row_tk['dienthoai'] ?>" name="dienthoai"  class="form-style" autocomplete="off"/>
                            </div>

                            <div class="form-item">
                                <p class="formLabel">Địa chỉ</p>
                                <input type="text"  value="<?php echo $row_tk['diachinhan'] ?>" name="diachinhan"class="form-style" autocomplete="off" />
                            </div>

                            <div class="form-item">
                                <p class="formLabel">E-mail</p>
                                <input type="email" value="<?php echo $row_tk['email'] ?>" name="email"  class="form-style" autocomplete="off" />
                            </div>
                            <div class="form-item">
                                <p class="formLabel">User Name</p>
                                <input type="text"value="<?php echo $row_tk['tendangnhap'] ?>" name="tendangnhap"  class="form-style" autocomplete="off"/>
                            </div>

                            <div class="form-item">
                                <p class="formLabel">Mật khẩu</p>
                                <input type="password" value="<?php echo $row_tk['matkhau'] ?>" name="matkhau" class="form-style" autocomplete="off"/>
                            </div>
                            

                            <input type="submit" name="btncapnhat" id="btncapnhat" value="Cập nhật" class="btn btn-primary btn-outline float-button-light waves-effect waves-button waves-float waves-light">

                            
                            
                            <button type="button" class="btn btn-danger btn-outline float-button-light waves-effect waves-button waves-float waves-light">Thoát</button>
                        </form>
                    </div>
                   

                    <div class="clearfix"></div>

                  


           

                </div>
            </div>
        </div>

    </div>
    <!-- End Contain Section -->    <!-- Start Footer Section -->  
</div>
<?php require('../../Block/Admin/Footer.php') ?>

</div>

<!-- Start core js -->
<script src="../assets/global/plugins/jquery/dist/jquery.min.js"></script>
<script src="../assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/global/plugins/Waves/dist/waves.min.js"></script>
<script src="../assets/global/plugins/screenfull.js/dist/screenfull.min.js"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- Start core javascript -->

<!-- Start global js -->
<script src="../assets/global/js/left-menu.min.js"></script>
<!-- End global js -->

<!-- Start page plugin js -->

<!-- End page plugin js -->

<!-- Start page js -->
<script src="../assets/global/js/form_input.min.js"></script>
<!-- End page js -->


</body>
</html>