<?php

//membuat sebuah kelas pada konsep OOP
class m_koneksi{
  
  //membuat variabel / properti
  
  //jenis jenis Modifier / konsep enkapsulasi pada OOP
  //privet
  //public
  //protected
  
    private $host = "127.0.0.1",
    $username = "root",
    $pass = "",
    $db = "perpustakaan_buku"; //nama databasenya disesuaikan dengan studikasus
    
   public $koneksi;

   //membuat konstrak yang dimana fungsi ini akan dijalankan otomatis ketika kita membuat objek dari kelas koneksi 
   function _construct()
{
  //variabel $this adalah sebuah variabel khusus dalam OOP PHP yang digunakan sebagai penunjuk kepada objek, ketika kita mengaksesnya dari dalam class.
   $this->koneksi = mysqli_connect($this->host, $this->username, $this->pass, $this->db, 3306);
   
   //mengecek properti koneksi berhasil atau gagal
     if ($this->koneksi) {
       echo "koneksi database". $this->db. "Berhasil";
       
       //mengembalikan nilai true jika koneksi kedatabase Berhasil
       return $this->koneksi;
     }else{
       
       //memunculkan pesan error jika koneksi kedatabase gagal 
       die("Koneksi kedatabase gagal".mysqli_connect_error());
     }
  }
}
// cara membuat variabel objek
$con = new m_koneksi();