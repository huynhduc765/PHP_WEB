
<?php

	if(isset($_POST['gui'])){
	$tenkhachhang=$_POST['tenkhachhang'];
	$email=$_POST['email'];
        $matkhau=$_POST['pass'];
        $dienthoai=$_POST['dienthoai'];
        $diachinhan = $_POST['diachicanhan'];

  
        		//Kiểm tra email đã tồn tại
         $query_email = 'select * from dangky where email ="'.$email.'"';
         $check_mail =mysql_query($query_email);
		if(mysql_num_rows($check_mail) > 0){
			
              //        echo "<script>
		// 	$(document).ready(function(){
              //           $('#tenkhachhang').val('".$tenkhachhang."');
              //           $('#email').val('".$email."');
              //           $('#matkhau').val('".$matkhau."');
              //           $('#diemthoai').val('".$dienthoai."');
              //           $('#diachinhan').val('".$diachinhan."');
              //           $('#tendangnhap').val('".$tendangnhap."');	
		// 				}); 
                   // </script>";
                   
                   echo '
                   <div class="alert alert-danger" role="alert">
                   <p>Đia chỉ E-Mail đã tồn tại</p>
                   <a href="/shoponline/register.php" style="margin:20px;text-decoration:none;">Nhấn vào đây thử lại</a>
                 </div>
                 ';
                   

    exit;
        }
	 $query_newUser = mysql_query("insert into dangky (tenkhachhang,email,matkhau,dienthoai,diachinhan) value('$tenkhachhang','$email','$matkhau','$dienthoai','$diachinhan')");		 
  
       echo '
       <div class="alert alert-primary" role="alert">
       <p>Đăng ký tài khoản thành công</p>
       <a href="/shoponline/login.php" style="margin:20px;text-decoration:none;">Nhấn vào đăng nhập</a>
     </div>
     ';
   

    }
?>
	


<form class="form-register"  method="post">
                            <fieldset>
                                <legend>Thông tin cá nhân</legend>

                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="f-name"><span class="require">*</span>Họ và tên</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control"  name="tenkhachhang" placeholder="Nhập họ và tên"   required>
                                    </div>
                                </div>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="number"><span class="require">*</span>Số điện thoại</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="dienthoai"  placeholder="Nhập số điện thoại"   required>
                                    </div>
                                </div>

                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="number"><span class="require">*</span>Địa chỉ</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="diachicanhan" placeholder="Nhập địa chỉ"  required>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Thông tin tài khoản</legend>
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Địa chỉ E-Mail</label>
                                    <div class="col-md-10">
                                        <input type="email" class="form-control" name="email" placeholder="Nhập địa chỉ email" required>
                                    </div>
                                </div>
               
                          
                                <div class="form-group d-md-flex align-items-md-center">
                                    <label class="control-label col-md-2" for="pwd"><span class="require">*</span>Mật khẩu</label>
                                    <div class="col-md-10">
                                        <input type="password" class="form-control"  name="pass" placeholder="Nhập mật khẩu" required>
                                    </div>
                                </div>
                           
          
                            </fieldset>
                   
                            <div class="terms">
                                <div class="float-md-right">
                                    <button type="submit" name="gui" class="return-customer-btn">Đăng Ký</button>

                                </div>
                            </div>
                        </form>