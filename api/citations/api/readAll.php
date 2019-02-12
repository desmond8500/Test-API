<?php
  include '../config.php';
  $citations = R::findall( 'citations' );
  //$citations = R::getAll( 'SELECT * FROM citations' );
  echo json_encode($citations);
?>
