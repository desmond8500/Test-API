<?php
  include '../config.php';
  $id = htmlspecialchars($_GET['id']);

  // Récupérer l'utilisateur
  $depense = R::load( 'depenses', $id );

  // Supprimer
  R::trash( $depense );

  // Redirection
  header("Location: index.php");

 ?>
