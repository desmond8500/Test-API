<?php
  include '../config.php';
  $id = rand(1,R::count( 'citations'));
  $citation = R::load('citations', $id);
  echo json_encode($citation);
?>
