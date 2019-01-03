<?php
  include 'config.php';
  $id = htmlspecialchars($_GET['id']);

  // Récupérer l'utilisateur
  $user = R::load( 'users', $id );

  // Supprimer
  R::trash( $user );

  // Redirection
  header("Location: ../index.php");

 ?>
