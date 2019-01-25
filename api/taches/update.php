<?php
  include '../config.php';
  $id = htmlspecialchars($_POST['id']);

  // Récupérer l'utilisateur
  $tache = R::load( 'taches', $id );

  // Modifier les valeurs
  $tache->titre         = $_POST['titre'];
  $tache->date          = $_POST['date'];
  $tache->description   = $_POST['description'];

  // Sauvegarder
  $id = R::store( $tache );

  // Redirection
  header("Location: index.php");

 ?>
