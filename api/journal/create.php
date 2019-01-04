<?php
include '../config.php';
// Créer un objet journal
$journal= R::dispense( 'journal' );

// Renseigner l'objet journal
$journal->titre         = $_POST['titre'];
$journal->date          = $_POST['date'];
$journal->description   = $_POST['description'];

// Enregistrer le contenu de l'objet dans la base de donnée
$id = R::store( $journal );

// Redirection vers la page d'index
header('location: index.php');

 ?>
