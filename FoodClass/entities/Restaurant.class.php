<?php // IDEA:
  include_once("config/db.class.php");

  class QuanAn
  {
    public $MaQuanAn;
    public $TenQuanAn;
    public $MaDiaChi;
    public $ChuSoHuu;
    public $SoDienThoai;
    public $AvatarQuan;
    public $MoTaQuanAn;
    public $GioDongCua;
    public $GioMoCua;
    public function __construct($ten_quanan,$ma_diachi,$chu_sohuu,$so_dt,$avatar_quan,$mota_quanan,$gio_dongcua,$gio_mocua)
    {
      // code...
      $this-> TenQuanAn = $ten_quanan;
      $this-> MaDiaChi = $ma_diachi;
      $this-> ChuSoHuu = $chu_sohuu;
      $this-> SoDienThoai = $so_dt;
      $this-> AvatarQuan = $avatar_quan;
      $this-> MoTaQuanAn = $mota_quanan;
      $this-> GioDongCua = $gio_dongcua;
      $this-> GioMoCua = $gio_mocua;
    }
    
    //public function save()
    //{
      // code...
      //$db = new Db();
      //$sql = "INSERT INTO QuanAn ( TenQuanAn, MaLoaiQuanAn, GiaTien, GioiThieuQuanAn, Avatar) VALUES('$this->TenQuanAn','$this->MaLoaiQuanAn','$this->GiaTien','$this->GioiThieuQuanAn',$this->Avatar')";
      //$result = $db ->query_excute($sql);

      //return $result;
    //}
    
       public static function DS_QuanAn()
    {
      // code...
      $db = new Db();
      $sql = "SELECT * FROM QuanAn, ChiTietDiaChi
       WHERE ChiTietDiaChi.MaDiaChi = QuanAn.MaDiaChi ";
      $result = $db -> select_to_array($sql);
      return $result;
    }

    public static function ChiTiet_QuanAn()
    {
      // code...
      $MaQuanAn = $_GET['MaQuanAn'];
      $db = new Db();
      $sql = "SELECT * FROM QuanAn , ChiTietDiaChi
      WHERE  QuanAn.MaQuanAn=$MaQuanAn
      AND ChiTietDiaChi.MaDiaChi = QuanAn.MaDiaChi 
     ";
      $result = $db -> select_to_array($sql);
      return $result;
    }

  }

 ?>
