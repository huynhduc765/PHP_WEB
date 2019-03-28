<?php
	
if(isset($_POST['dangnhap'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sql="select * from dangky where email='$email' and matkhau='$pass'";
		$admin = mysql_query($sql);
		if(mysql_num_rows($admin)>0){
			$row = mysql_fetch_array($admin);
			//lấy thông tin trạngt thái
			// $_SESSION['dangnhap']=$email;
			$tendangnhap=$_SESSION['dangnhap']=$email;

			$_SESSION["tendangnhap"] = $row ['tendangnhap'];
			$_SESSION["diachinhan"] = $row ['diachinhan'];
			$_SESSION["dienthoai"] = $row ['dienthoai'];
			$_SESSION["email"] = $row ['email'];
			header('location: index.php');

			// echo '<p style="text-align:center;width:auto;padding:30px;background:red;color:#fff;font-size:20px;">Bạn đã đăng nhập thành công.</p>';
			// echo '<a href="index.php?quanly=dathang" style="font-size:20px;">Quay lại để thanh toán</a>';
		}else{
            echo "<p style='color:red; font-size:20' >Email và mật khẩu không đúng, vui lòng kiểm tra lái</p>";

		}
	}
?>

<form method="post">
       <div class="form-group">
              <label>Tên đăng </label>
              <input type="text"  name="email" placeholder="Nhập tên đăng nhập" id="email"
                     class="form-control">
       </div>
       <div class="form-group">
              <label>matkhau</label>
              <input type="password" name="pass" placeholder="matkhau" id="pas" class="form-control">
       </div>
       <input type="submit" name="dangnhap" value="Login" class="return-customer-btn">
</form>