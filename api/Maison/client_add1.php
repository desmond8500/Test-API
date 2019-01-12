<?php   session_start();    include "../Admin/database.php";

  $titre      = htmlspecialchars($_POST['titre']);
  $prenom     = htmlspecialchars($_POST['prenom']);
  $nom        = htmlspecialchars($_POST['nom']);
  $ci         = htmlspecialchars($_POST['idcard']);
  $delivre    = htmlspecialchars($_POST['delivrance']);
  $telephone  = htmlspecialchars($_POST['Telephone']);
  $local1     = htmlspecialchars($_POST['local1']);
  $contrat    = htmlspecialchars($_POST['contrat']);
  $prix       = htmlspecialchars($_POST['prix']);
  $arrivee    = date("Y-m-d") ;
  $depart     = 0;

  $req = $bdd->prepare('INSERT INTO location_clients(titre,prenom,nom,ci,delivre,telephone,local1,prix,arrivee,depart,contrat)
                              VALUES(:titre,:prenom,:nom,:ci,:delivre,:telephone,:local1,:prix,:arrivee,:depart,:contrat)');
  $req->execute(array(
    'titre' => $titre,
    'prenom' => $prenom,
    'nom' => $nom,
    'ci' => $ci,
    'delivre' => $delivre,
    'telephone' => $telephone,
    'local1' => $local1,
    'prix' => $prix,
    'arrivee' => $arrivee,
    'depart' => $depart,
    'contrat' => $contrat
    ));
  $req->closeCursor();

  header("Location: /index.php")
 ?>
