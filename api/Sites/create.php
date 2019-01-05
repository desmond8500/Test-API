<?php
include '../config.php';
// Créer un objet utilisateur
$site= R::dispense( 'sites' );

// Renseigner l'objet utilisateur
$site->lien = $_POST['lien'];
$site->description = $_POST['description'];
$site->nom    = $_POST['nom'];

// Enregistrer le contenu de l'ojet dans la base de donnée
$id = R::store( $site );

// Redirection vers la page d'index
header('location: index.php');

 ?>
