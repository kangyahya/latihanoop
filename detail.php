<?php
include 'inc/database.class.php';
$db = new Database;
$userdata = $db->get_where('users',[array('id', $_GET['id'])]);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detail</title>
  </head>
  <body>

  </body>
</html>
