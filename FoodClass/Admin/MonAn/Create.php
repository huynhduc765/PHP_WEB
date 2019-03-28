<?php 
session_start();
require "../../Db/Connect.php";
require "../../Db/function.php";
?>
<?php
if(isset($_POST["btncapnhat"]))
{
$tenloaisp = $_POST['tenloaisp'];
$tinhtrang =$_POST['tinhtrang'];
echo $sql ="INSERT INTO loaisp
value (null, '$tenloaisp',
              '1'
              )";
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

    <div class="container-fluid right_color">
        <div class="page-main-header">
            <h2 class="page-name-title">Quản lý danh mục</h2>
        </div>
      <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Thông tin danh mục </h2>
                        </div>
                        <form method="POST" enctype="multipart/form-data" class="section-body">
                            <div class="form-item">
                                <p class="formLabel">Tên danh mục</p>
                                <input type="text"  name="tenloaisp" class="form-style focus" autocomplete="off"/>
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
    <?php require('../../Block/Admin/Footer.php') ?>
</div>
</div>
<script src="../assets/global/plugins/jquery/dist/jquery.min.js"></script>
<script src="../assets/global/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../assets/global/plugins/Waves/dist/waves.min.js"></script>
<script src="../assets/global/plugins/screenfull.js/dist/screenfull.min.js"></script>
<script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
<script src="../assets/global/js/left-menu.min.js"></script>
<script src="../assets/global/js/form_input.min.js"></script>
</body>
</html>