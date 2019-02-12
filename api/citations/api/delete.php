<?php
  include '../config.php';
  $id = htmlspecialchars($_GET['id']);

  // Récupérer l'utilisateur
  $citation = R::load( 'citations', $id );

  // Supprimer
  R::trash( $citation );

  // Redirection
  header("Location: ../index.php");

 ?>
