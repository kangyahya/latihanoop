<?php
class Buku
{
  var $judul;
  var $harga;

  function getJudul()
  {
    echo $this->judul."</br>";
  }

  function getHarga()
  {
    echo $this->harga."</br>";
  }

  function __construct($param1, $param2)
  {
    $this->judul = $param1;
    $this->harga = $param2;
  }
}
 ?>
