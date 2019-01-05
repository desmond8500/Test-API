<?php
  include '../config.php';
  $id = htmlspecialchars($_POST['id']);

  // Récupérer l'utilisateur
  $site = R::load( 'sites', $id );

  // Modifier les valeurs
  $site->lien           = $_POST['lien'];
  $site->nom            = $_POST['nom'];
  $site->description    = $_POST['description'];

  // Sauvegarder
  $id = R::store( $site );

  // Redirection
  header("Location: index.php");

 ?>
