<?php // IDEA:
  include_once("config/db.class.php");

  class MonAn
  {
    public $MaMonAn;
    public $TenMonAn;
    public $MaLoaiMonAn;
    public $GiaTien;
    public $GioiThieuMonAn;
    public $Avatar;
    public function __construct($ten_moan,$ma_loaimonan,$gia_tien,$gioithieu_monan,$avatar)
    {
      // code...
      $this-> TenMonAn = $ten_moan;
      $this-> MaLoaiMonAn = $ma_loaimonan;
      $this-> GiaTien = $gia_tien;
      $this-> GioithieuMonAn = $gioithieu_monan;
      $this-> Avatar = $avatar;
    }
    public function save()
    {
      // code...
      $db = new Db();
      $sql = "INSERT INTO MonAn ( TenMonAn, MaLoaiMonAn, GiaTien, GioiThieuMonAn, Avatar) VALUES('$this->TenMonAn','$this->MaLoaiMonAn','$this->GiaTien','$this->GioiThieuMonAn',$this->Avatar')";
      $result = $db ->query_excute($sql);

      return $result;
    }
    public static function DS_MonAn()
    {
      //DSmonan
      $db = new Db();
      $sql = "SELECT * FROM QuanAn,MonAn,LoaiMonAn, ChiTietDiaChi
      WHERE  MonAn.MaLoaiMonAn = LoaiMonAn.MaLoaiMonAn
      AND QuanAn.MaQuanAn = LoaiMonAn.MaQuanAn
      AND ChiTietDiaChi.MaDiaChi = QuanAn.MaDiaChi";
      $result = $db -> select_to_array($sql);
      return $result;
    }

    public static function DS_3MonAn_TrangChu()
    {
      //DSmonan
      $db = new Db();
      $sql = "SELECT * FROM QuanAn,MonAn,LoaiMonAn, ChiTietDiaChi
      WHERE  MonAn.MaLoaiMonAn = LoaiMonAn.MaLoaiMonAn
      AND QuanAn.MaQuanAn = LoaiMonAn.MaQuanAn
      AND ChiTietDiaChi.MaDiaChi = QuanAn.MaDiaChi LIMIT 1,3";
      $result = $db -> select_to_array($sql);
      return $result;
    }

    public static function ChiTiet_MonAn()
    {
      //Chitietmonan
      $MaMonAn = $_GET['MaMonAn'];
      $db = new Db();
      $sql = "SELECT * FROM MonAn,LoaiMonAn,QuanAn
      WHERE QuanAn.MaQuanAn = LoaiMonAn.MaQuanAn
      AND LoaiMonAn.MaLoaiMonAn = MonAn.MaLoaiMonAn AND MonAn.MaMonAn=$MaMonAn";
      $result = $db -> select_to_array($sql);
      return $result;
    }

    public static function TenLoai_MonAn()
    {
      //Tenloaimonan
    $MaQuanAn = $_GET['MaQuanAn'];
      $db = new Db();
      $sql = "SELECT * from LoaiMonAn 
      where LoaiMonAn.MaQuanAn = $MaQuanAn
      
      ";
      $result = $db -> select_to_array($sql);
      return $result;
    }
    public static function MonAn_TheoLoai()
    {
      //Monan_theoloai

//      $db = new Db();
  //    $sql = "SELECT * from monan
    //  where monan.MaLoaiMonAn = MaLoaiMonAn
      //";
      //$db = new Db();
      //$sql = "SELECT loaimonan.MaLoaiMonAn, monan.TenMonAn, monan.Avatar, loaimonan.TenLoaiMonAn
      //FROM loaimonan
      //INNER JOIN monan ON monan.MaLoaiMonAn=loaimonan.MaLoaiMonAn"
      //;
      $MaLoaiMonAn = 'MaLoaiMonAn';
      $db = new Db();
      $sql = "SELECT * from monan
      where monan.MaLoaiMonAn = $MaLoaiMonAn
      ";
      $result = $db -> select_to_array($sql);
      return $result;

      $result = $db -> select_to_array($sql);
      return $result;
    }



  }

 

 ?>
