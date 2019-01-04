<?php
  include '../config.php';
  $id = htmlspecialchars($_GET['id']);

  // Récupérer l'utilisateur
  $journal= R::load( 'journal', $id );

  // Supprimer
  R::trash( $journal);

  // Redirection
  header("Location: index.php");

 ?>
