<?php
  include '../config.php';
  $taches = R::findall( 'taches' );
  //$taches = R::getAll( 'SELECT * FROM taches' );
  echo json_encode($taches);
?>
