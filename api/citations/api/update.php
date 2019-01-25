<?php
  include '../config.php';
  $id = htmlspecialchars($_POST['id']);

  // Récupérer l'objet
  $citation = R::load( 'citations', $id );

  // Modifier les valeurs
  $citation->auteur = $_POST['auteur'];
  $citation->citation    = $_POST['citation'];

  // Sauvegarder
  $id = R::store( $citation );

  // Redirection
  header("Location: ../index.php");

 ?>
