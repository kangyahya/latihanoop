<?php
class Database
{
  var $hostname = 'localhost';
  var $username = 'root';
  var $password = '';
  var $dbname = 'db_latihanoop';
  var $connection = '';
  function __construct()
  {
    //mengkoneksikan ke Database
    $this->connection = mysqli_connect($this->hostname, $this->username, $this->password, $this->dbname);
    if (mysqli_connect_errno()) {
      echo "Koneksi database Gagal : ".mysqli_connect_error();
    }
  }

  public function get($table)
  {
    $data = mysqli_query($this->connection, "select * from {$table}");
    while ($row = mysqli_fetch_array($data)) {
      $result[] = $row;
    }
    return $result;
  }
  public function get_where($table, $where=[])
  {
    $data = mysqli_query($this->connection, "select * from {$table} where {$where[0][0]} = '{$where[0][1]}'");
    return mysqli_fetch_array($data);
  }
}

?>
