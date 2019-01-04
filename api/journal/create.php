<?php
include '../config.php';
// Créer un objet utilisateur
$journal= R::dispense( 'journal' );

// Renseigner l'objet utilisateur
$journal->titre = $_POST['titre'];
$journal->date    = $_POST['date'];
$journal->description    = $_POST['description'];

// Enregistrer le contenu de l'ojet dans la base de donnée
$id = R::store( $journal );

// Redirection vers la page d'index
header('location: index.php');

 ?>
