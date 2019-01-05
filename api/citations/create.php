<?php
include '../config.php';
// Créer un objet utilisateur
$citation= R::dispense( 'citations' );

// Renseigner l'objet utilisateur
$citation->citation = $_POST['citation'];
$citation->auteur    = $_POST['auteur'];

// Enregistrer le contenu de l'ojet dans la base de donnée
$id = R::store( $citation );

// Redirection vers la page d'index
header('location: index.php');

 ?>
