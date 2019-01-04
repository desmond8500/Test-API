<?php
  include '../config.php';
  $id = htmlspecialchars($_POST['id']);

  // Récupérer l'utilisateur
  $depense = R::load( 'depenses', $id );

  // Modifier les valeurs
  $depense->objet   = $_POST['objet'];
  $depense->type    = $_POST['type'];
  $depense->montant = $_POST['montant'];
  $depense->date    = $_POST['date'];

  // Sauvegarder
  $id = R::store( $depense );

  // Redirection
  header("Location: index.php");

 ?>
