<?php
  include '../config.php';
  $id = htmlspecialchars($_GET['id']);

  // Récupérer l'utilisateur
  $tache= R::load( 'taches', $id );

  // Supprimer
  R::trash( $tache);

  // Redirection
  header("Location: index.php");

 ?>
