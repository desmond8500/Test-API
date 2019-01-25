<?php
  include '../config.php';
  $id = htmlspecialchars($_GET['id']);

  // Récupérer l'utilisateur
  $site = R::load( 'sites', $id );

  // Supprimer
  R::trash( $site );

  // Redirection
  header("Location: index.php");

 ?>
