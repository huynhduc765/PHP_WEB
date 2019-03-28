<?php

$conn = mysqli_connect("localhost", "admin", "M@tkh4u1", "QuanLyQuanAn");
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_REQUEST['username']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO TaiKhoan (TenTaiKhoan, MatKhau, Email) VALUES ('$username', '$password', '$email')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
    header("Location: ../../index.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>

