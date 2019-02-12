<?php
  include '../config.php';



  // Créer un objet
  $tache= R::dispense( 'taches' );

  // Renseigner l'objet
  $tache->site = $_POST['site'];
  $tache->etat    = $_POST['etat'];
  $tache->description    = $_POST['description'];



  // Enregistrer le contenu de l'objet dans la base de donnée
  $id = R::store( $tache );

  // Redirection vers la page d'acceuil
  header('location: ../index.php');

 ?>
