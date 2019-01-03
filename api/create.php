<?php
include 'config.php';
// Créer un objet utilisateur
$user= R::dispense( 'users' );

// Renseigner l'objet utilisateur
$user->prenom = $_POST['prenom'];
$user->nom    = $_POST['nom'];

// Enregistrer le contenu de l'ojet dans la base de donnée
$id = R::store( $user );

// Redirection vers la page d'index
header('location: ../index.php');

 ?>
