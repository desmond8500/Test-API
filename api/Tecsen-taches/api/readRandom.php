<?php
  include '../config.php';
  $id = rand(1,R::count( 'taches'));
  $tache = R::load('taches', $id);
  echo json_encode($tache);
?>
