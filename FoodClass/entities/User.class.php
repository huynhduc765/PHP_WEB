<?php // IDEA:
  include_once("config/db.class.php");

  class TaiKhoan
  {
    public $TenTaiKhoan;
    public $MatKhau;
    public $TenHienThi;
    public $Email;
 
    public function __construct($ten_taikhoan,$mat_khau,$ten_hienthi,$email)
    {
      // code...
      $this->TenTaiKhoan = $ten_taikhoan;
      $this->MatKhau = $mat_khau;
      $this->Email = $email;
      
    }
    
    public function save()
    {
      $db = new Db();
      $sql = "INSERT INTO TaiKhoan (TenTaiKhoan,Email,MatKhau) VALUES
    (
         '".mysqli_real_escape_string($db->connect(),$this->TenTaiKhoan)."'
         ,'".mysqli_real_escape_string($db->connect(),$this->Email)."'
         ,'".md5(mysqli_real_escape_string($db->connect(),$this->MatKhau))."'
      )";
      $result = $db->query_excute($sql);
      return $result;

    }
    public static function checkLogin($TenTaiKhoan,$MatKhau){

      $MatKhau = md5($MatKhau);
      $db = new Db();
      $sql = "SELECT * FROM TaiKhoan
      where TenTaiKhoan = '$TenTaiKhoan' and MatKhau ='$MatKhau'
      ";
      $result = $db -> select_to_array($sql);
      return $result;
    }
       public static function ThongTin_TaiKhoan()
    {
      $db = new Db();
      $TenTaiKhoan = 'TenTaiKhoan';
      $db = new Db();
      $sql = "SELECT * FROM TaiKhoan
      where TenTaiKhoan = $TenTaiKhoan
      ";
      $result = $db -> select_to_array($sql);
      return $result;
    }

  }
 ?>
