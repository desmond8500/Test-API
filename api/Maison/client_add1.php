<?php
include '../config.php';
// Créer un objet utilisateur
$client= R::dispense( 'location_clients' );

// Renseigner l'objet utilisateur
$client->titre      = htmlspecialchars($_POST['titre']);
$client->prenom     = htmlspecialchars($_POST['prenom']);
$client->nom        = htmlspecialchars($_POST['nom']);
$client->ci         = htmlspecialchars($_POST['idcard']);
$client->delivre    = htmlspecialchars($_POST['delivrance']);
$client->telephone  = htmlspecialchars($_POST['Telephone']);
$client->local1     = htmlspecialchars($_POST['local1']);
$client->contrat    = htmlspecialchars($_POST['contrat']);
$client->prix       = htmlspecialchars($_POST['prix']);
$client->arrivee    = date("Y-m-d") ;
$client->depart     = 0;

// Enregistrer le contenu de l'ojet dans la base de donnée
$id = R::store( $client );

// Redirection vers la page d'index
header('location: index.php');

 ?>
