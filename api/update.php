<?php
  include 'config.php';
  $id = htmlspecialchars($_POST['id']);

  // Récupérer l'utilisateur
  $user = R::load( 'users', $id );

  // Modifier les valeurs
  $user->prenom = $_POST['prenom'];
  $user->nom    = $_POST['nom'];

  // Sauvegarder
  $id = R::store( $user );

  // Redirection
  header("Location: ../index.php");

 ?>
