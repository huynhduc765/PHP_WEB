<!--
//session_start();
//require "../../Db/Connect.php";
//require "../../Db/function.php";
// // kiem tra trang thai chua dang nhap
// if(!isset( $_SESSION["Id"])){
// 	header('Location: ../index.php');
// 	require "../index.php";
// }
-->
<?php 
session_start();
//require "../../config/db.class.php";

require "../../entities/Restaurant.class.php";
// // kiem tra trang thai chua dang nhap
// if(!isset( $_SESSION["Id"])){
// 	header('Location: ../index.php');
// 	require "../index.php";
// }
?>
<?php
$prods = QuanAn::DS_QuanAn();

?>

<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="utf-8">
       <meta name="description" content="bootstrap default admin template">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <link rel="stylesheet" href="../assets/global/plugins/Waves/dist/waves.min.css" />
       <link rel="stylesheet" href="../assets/global/plugins/bootstrap/dist/css/bootstrap.min.css" />
       <link rel="stylesheet" href="../assets/icons_fonts/font-awesome/css/font-awesome.min.css" />
       <link rel="stylesheet" href="../assets/global/plugins/datatables/media/css/jquery.dataTables.min.css" />
       <link rel="stylesheet" href="../assets/global/plugins/datatables/media/css/dataTables.bootstrap.min.css" />
       <link href="../assets/global/css/components.min.css" type="text/css" rel="stylesheet" />
       <link rel="stylesheet" href="../assets/layouts/layouts_left_menu/left_menu_layout.min.css" />
       <link rel="icon" href="../assets/favicon/prince.ico" type="image/x-icon" />
       <link rel="icon" type="image/png" sizes="192x192" href="../assets/favicon/prince-192x192.png">
       <link rel="apple-touch-icon" sizes="180x180" href="../assets/favicon/prince-180x180.png">
</head>

<body class="nav-medium">
       <div class="container body">
              <div class="main_container">
                     <!-- Start Loader -->
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
                     <!-- End Loader -->

                     <!-- Start Scroll Top -->
                     <a href="javascript:" id="scroll" style="display: none;"><span></span></a>
                     <!-- End Scroll Top -->

                     <!-- start Left Menu-->
                     <?php  require('../BlockAdmin/LeftMenu.php')?>

                     <!-- End Left Menu -->

                     <!-- start top navigation -->
                     <div class="top_nav">
                     <?php require('../BlockAdmin/TopMenu.php') ?>

                     </div>
                     <div class="clearfix"></div>
                     <!-- End top navigation -->
                     <!-- Start Contain Section -->
                     <div class="container-fluid right_color">
                            <div class="page-main-header">
                                   <!-- Page Title -->
                                   <h2 class="page-name-title">Quản lý danh sách chủ quán ăn</h2>
                                   <!--  Breadcrumb -->
                                   <ol class="breadcrumb">
                                          <li><a href="#">Trang chủ</a></li>
                                          <li class="active">Quản lý chủ quán ăn</li>
                                   </ol>
                            </div>

                            <div class="contain-section">
                                   <div class="contain-inner-section">

                                          <div class="row">

                                                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="section-header">
                                                               <h2>Quản lý chủ quán ăn</h2>                                                              
                                                        </div>
                                                        <a href="create.php" class="btn btn-primary float-button-right">Thêm</a>

                                                        <div class="section-body">

                                                               <table class="display datatable-default">
                                                                      <thead>
                                                                             <tr>
                                                                                    <th>Tên quán ăn</th>
                                                                                    <th>Chủ sỡ hữu</th>
                                                                                    <th>SDT</th>
                                                                                    <th>Hình ảnh</th>

                                                                                    <th>Mô tả quán ăn</th>

                                                                                    <th>Tính năng</th>
                                                                             </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                      <?php    
                                                                      foreach ($prods as $item) {                        
                                                                      ?>
                                                                             <tr>
                                                                                    <td><?php echo $item['TenQuanAn'] ?></td>
                                                                                    <td><?php echo $item['ChuSoHuu'] ?></td>
                                                                                    <td><?php echo $item['SoDienThoai'] ?></td>
                                                                                    <td><img  width="30px" height="50px" src="../../assets/images/resource/<?php echo $item['AvatarQuan'];?>"/></td>                                                                                    <td><?php echo $item['MoTaQuanAn'] ?></td>




                                                                                    <td>
                                                                                    <div class="btn-group float-xs-left" >

                                        <a href="edit.php?TenTaiKhoan=<?php echo $item['TenTaiKhoan'] ?>" class="btn btn-primary float-button-right"><i class="fa fa-cogs"></i></a>

                                        <a href="Detel.php?TenTaiKhoan=<?php echo $item['TenTaiKhoan'] ?>" class="btn btn-primary float-button-right"><i class="fa fa-trash-o"></i></a>

                                    </div>
                                                                                    </td>
                                                                                   
                                                                               
                                                                             </tr>
                                                 <?php }
                                                 ?>
                                                                          
                                                                      </tfoot>
                                                               </table>

                                                        </div>
                                                 </div>



                                          </div>
                                   </div>
                            </div>

                     </div>
                     <?php require('../BlockAdmin/Footer.php') ?>

              </div>
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
       <script src="../assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
       <script src="../assets/global/plugins/datatables/media/js/dataTables.bootstrap.min.js"></script>
       <!-- End page plugin js -->

       <!-- Start page js -->
       <script>
       $(document).ready(function() {
              $('.datatable-default').DataTable();
       });
       </script>
       <!-- End page js -->


</body>

</html>