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
