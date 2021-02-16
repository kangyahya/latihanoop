<?php

include 'inc/database.class.php';
$db = new Database;
$userdata = $db->get('users');

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table border="1" cellspacing=0>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jenis Kelamin</th>
        <th>Kota</th>
        <th>Action</th>
      </tr>
      <?php
      $no = 1;
      foreach ($userdata as $row) { ?>
      <tr>
        <td><?=$no++?></td>
        <td><?=$row['nama']?></td>
        <td><?=$row['kelas']?></td>
        <td><?=$row['jk']?></td>
        <td><?=$row['kota']?></td>
        <td> <a href="detail.php?id=<?=$row['id']?>">View</a> </td>
      </tr>
    <?php } ?>
    </table>
  </body>
</html>
