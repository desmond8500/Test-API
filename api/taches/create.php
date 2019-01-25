<?php
include '../config.php';
// Créer un objet tache
$tache= R::dispense( 'taches' );

// Renseigner l'objet tache
$tache->titre         = $_POST['titre'];
$tache->date          = $_POST['date'];
$tache->description   = $_POST['description'];

// Enregistrer le contenu de l'objet dans la base de donnée
$id = R::store( $tache );

// Redirection vers la page d'index
header('location: index.php');

 ?>
