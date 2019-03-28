<?php // IDEA:
  include_once("config/db.class.php");

  class admin
  {
    public $Id;
    public $MatKhau;
    public $Name;
    public $TenDangNhap;
 
    public function __construct($id,$matkhau,$name,$tendangnhap)
    {
      // code...
      $this-> Id = $id;
      $this-> MatKhau = $matkhau;
      $this-> Name = $name;
      $this-> TenDangNhap = $tendangnhap;
      
    }
    
    
    public static function Admin()
    {
      // code...
      $db = new Db();
   
      $sql = "SELECT * from Admin
      where TenDangNhap =TenDangNhap
      and MatKhau = MatKhau";
      $result = $db -> select_to_array($sql);
      return $result;
    }


  }

 ?>
