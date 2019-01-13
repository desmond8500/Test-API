<?php
  include '../config.php';
  $citations = R::getAll( 'SELECT * FROM citations' );
  echo json_encode($citations);
?>
