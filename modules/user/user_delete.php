<?php
$id = $_GET['id'];
$db->delete('users',$id);
header('location:?page=user');
?>
