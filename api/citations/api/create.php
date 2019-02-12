<?php
  include '../config.php';



  // Créer un objet
  $citation= R::dispense( 'citations' );

  // Renseigner l'objet
  $citation->citation = $_POST['citation'];
  $citation->auteur    = $_POST['auteur'];



  // Enregistrer le contenu de l'objet dans la base de donnée
  $id = R::store( $citation );

  // Redirection vers la page d'acceuil
  header('location: ../index.php');

 ?>
