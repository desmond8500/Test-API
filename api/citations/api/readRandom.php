<?php
  include '../config.php';
  $id = htmlspecialchars($_POST['id']);
  $citation =  R::getAll( 'SELECT * FROM users WHERE id = :id', [':id' => $id] );;
  echo json_encode($citation);
?>
