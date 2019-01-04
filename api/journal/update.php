<?php
  include '../config.php';
  $id = htmlspecialchars($_POST['id']);

  // Récupérer l'utilisateur
  $journal = R::load( 'journal', $id );

  // Modifier les valeurs
  $journal->titre         = $_POST['titre'];
  $journal->date          = $_POST['date'];
  $journal->description   = $_POST['description'];

  // Sauvegarder
  $id = R::store( $journal );

  // Redirection
  header("Location: index.php");

 ?>
