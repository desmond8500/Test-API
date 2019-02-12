<?php
  include '../config.php';
  $id = htmlspecialchars($_POST['id']);
  $tache =  R::getAll( 'SELECT * FROM taches WHERE id = :id', [':id' => $id] );
  echo json_encode($tache);
?>
