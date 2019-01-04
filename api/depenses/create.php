<?php
include '../config.php';
// Créer un objet utilisateur
$depenses= R::dispense( 'depenses' );

// Renseigner l'objet utilisateur
$depenses->objet   = $_POST['objet'];
$depenses->type    = $_POST['type'];
$depenses->montant = $_POST['montant'];
$depenses->date    = $_POST['date'];

// Enregistrer le contenu de l'ojet dans la base de donnée
$id = R::store( $depenses );

// Redirection vers la page d'index
header('location: index.php');

 ?>
