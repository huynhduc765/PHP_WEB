<?php 
session_start();
include("../Db/Connect.php");
require("../Db/function.php");
if(!isset( $_SESSION["tendangnhap"])){
       header('Location: ../../../shoponline/login.php');
       require "../../../shoponline/login.php";
}
?>
