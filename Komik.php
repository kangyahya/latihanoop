<?php
require_once 'Buku.php';

class Komik extends Buku
{
  var $penerbit;
  function setPenerbit($param)
  {
    $this->$penerbit = $param;
  }
  function getPenerbit()
  {
    echo $this->penerbit."</br>";
  }
  function __construct($param1, $param2, $param3)
  {
    $this->judul = $param1;
    $this->harga = $param2;
    $this->penerbit = $param3;
  }
}

?>
