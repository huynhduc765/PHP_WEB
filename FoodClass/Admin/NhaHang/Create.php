<?php 
session_start();
require "../../Db/Connect.php";
require "../../Db/function.php";
// kiem tra trang thai chua dang nhap
// if(!isset( $_SESSION["Id"])){
// 	header('Location: ../index.php');
// 	require "../index.php";
// }
// ?>
<?php
if(isset($_POST["btncapnhat"]))
{
$TenDuong= $_POST['TenDuong'];
$KinhDo= $_POST['KinhDo'];
$ViDo = $_POST['ViDo'];
$TinhTrang  = $_POST['TinhTrang'];
$name = $_FILES["fileUpload"]["name"];
 $type = $_FILES["fileUpload"]["type"];
 $size = $_FILES["fileUpload"]["size"];
if( $size <= 5*1024*1024 ) {
	move_uploaded_file(
		$_FILES["fileUpload"]["tmp_name"],"../../Images/$name");
  echo $sql ="INSERT INTO canhbao
    value (null, '$TenDuong',
                 '$KinhDo',
                 '$ViDo',
                 '$name',
                 '',
                 '',
                 '$TinhTrang',
                 '',
                 '',
                 ''                 
				  )";
 
	//mysql_query($sql);
    // header('Location: index.php');
 
}else{
	echo "FIle cua ban phai nho hon 5M";	
}
}
?>
<!--dong them tin-->

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="../ckeditor/ckeditor.js"></script>

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
    <script src="../ckeditor/ckeditor.js"></script>
	<script src="../ckfinder/ckfinder.js"></script>

	<!--ham goi chen hinh-->
	<script type="text/javascript">
function BrowseServer( startupPath, functionData ){
	var finder = new CKFinder();
	finder.basePath = '../ckfinder'; //Đường path nơi đặt ckfinder
	finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
	finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
	finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
	//finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn	
	finder.popup(); // Bật cửa sổ CKFinder
} //BrowseServer

function SetFileField( fileUrl, data ){
	document.getElementById( data["selectActionData"] ).value = fileUrl;
}
function ShowThumbnails( fileUrl, data ){	
	var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
	document.getElementById( 'thumbnails' ).innerHTML +=
	'<div class="thumb">' +
	'<img src="' + fileUrl + '" />' +
	'<div class="caption">' +
	'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
	'</div>' +
	'</div>';
	document.getElementById( 'preview' ).style.display = "";
	return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn
}
</script>
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
            <h2 class="page-name-title">Quản lý sản phẩm</h2>
        </div>
      <div class="contain-section">
            <div class="contain-inner-section">

                <div class="row">

                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-header">
                            <h2>Thông tin sản phẩm</h2>
                        </div>
                        <form method="POST" enctype="multipart/form-data" class="section-body">
                            <div class="form-item">
                                <p class="formLabel">Mã sản phẩm</p>
                                <input type="text"  name="tenkhachhang" class="form-style focus" autocomplete="off"/>
                            </div>

                            <div class="form-item">
                                <p class="formLabel">Tên sản phẩm</p>
                                <input type="text"  name="tenkhachhang" class="form-style focus" autocomplete="off"/>
                            </div>
                            <div class="form-item">
                                <p class="formLabel">Hình ảnh</p>
                                <input type="file" class="form-style focus" name="fileUpload" autocomplete="off" >

                            </div>
                            <div class="form-item">
                                <p class="formLabel">Hình ảnh 1</p>
                                <input type="file" class="form-style focus" name="fileUpload" autocomplete="off" >

                            </div>
                            <div class="form-item">
                                <p class="formLabel">Hình ảnh 2</p>
                                <input type="file" class="form-style focus" name="fileUpload" autocomplete="off" >

                            </div>
                            <div class="form-item">
                                <p class="formLabel">Hình ảnh 3 </p>
                                <input type="file" class="form-style focus" name="fileUpload" autocomplete="off" >

                            </div>
                            <div class="form-item">
                                <p class="formLabel">Giá đề xuất</p>
                                <input type="text"  name="tenkhachhang" class="form-style focus" autocomplete="off"/>
                            </div>

                            <div class="form-item">
                                <p class="formLabel">Giảm giá</p>
                                <input type="text"  name="tenkhachhang" class="form-style focus" autocomplete="off"/>
                            </div>
                            <div class="form-item">
                                <p class="formLabel">Số lượng</p>
                                <input type="text"  name="tenkhachhang" class="form-style focus" autocomplete="off"/>
                            </div>
                            <div class="form-item">
                                <p class="formLabel">loại sản phẩm</p>
                                <input type="text"  name="tenkhachhang" class="form-style focus" autocomplete="off"/>
                            </div>
                            <div class="form">
                                <p class="formLabel">Mô tả ngắn</p>
                                <textarea type="text"  name="noidungngan" class=""></textarea>
                                <script type="text/javascript">
var editor = CKEDITOR.replace( 'noidungngan',{
	uiTIeuDe : '#9AB8F3',
	language:'vi',
	skin:'v2',
	filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
			 	
	toolbar:[
	['Source','-','Save','NewPage','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
	['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
	['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
	['Styles','Format','Font','FontSize'],
	['TextTIeuDe','BGTIeuDe'],
	['Maximize', 'ShowBlocks','-','About']
	]
});		
</script>
                            </div>
                            <div class="form">
                                <p class="formLabel">Nội dung</p>
                                <textarea type="text"  name="noidung" class=""></textarea>
                                <script type="text/javascript">
var editor = CKEDITOR.replace( 'noidung',{
	uiTIeuDe : '#9AB8F3',
	language:'vi',
	skin:'v2',
	filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
			 	
	toolbar:[
	['Source','-','Save','NewPage','Preview','-','Templates'],
	['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
	['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
	['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
	['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
	['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
	['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
	['Link','Unlink','Anchor'],
	['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
	['Styles','Format','Font','FontSize'],
	['TextTIeuDe','BGTIeuDe'],
	['Maximize', 'ShowBlocks','-','About']
	]
});		
</script>
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