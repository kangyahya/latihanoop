<?php
//nama class Buku
class Buku
{
  //kumpulan variable dari class Buku
  var $judul;
  var $harga;

  //method atau function
  function getJudul()
  {
    //statement dari method/function
    echo $this->judul."</br>";
  }

  function getHarga()
  {
    echo $this->harga."</br>";
  }

  // 
  function __construct($param1, $param2)
  {
    $this->judul = $param1;
    $this->harga = $param2;
  }
}

//akhir dari file Buku.php
 ?>
