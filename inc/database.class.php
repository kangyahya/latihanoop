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

  public function insert($table, $data)
  {
    $key = array_keys($data);
    $value = array_values($data);
    $keys = implode(', ',$key);
    $values = implode("','", $value);
    mysqli_query($this->connection, "INSERT INTO {$table} ({$keys}) VALUES ('{$values}')");
    mysqli_close();
  }
  public function update($table, $data, $where)
  {
    if (count($data) > 0) {
      foreach ($data as $key => $value) {
        $value = "'$value'";
        $updates[] = "$key = $value";
      }
    }
    $implodeArray = implode(' ,',$updates);
    $sql = ("UPDATE {$table} SET $implodeArray WHERE id = '{$where}'");
    mysqli_query($this->connection, $sql);
    mysqli_close();
  }
  public function delete($table, $where)
  {
    $sql = "DELETE FROM {$table} WHERE id = {$where}";
    mysqli_query($this->connection, $sql);
    mysqli_close();
  }
}

?>
