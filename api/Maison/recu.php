<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"><?php
  include '../config.php';
  include 'recu/recu.css';

  if (isset($_POST['nom'])){
    $recu1  = htmlspecialchars($_POST['nom']);
    $mois   = htmlspecialchars($_POST['month']);
    $date   = htmlspecialchars($_POST['date2']);
    $location = htmlspecialchars($_POST['location']);
    $local = 'local';
    $prenom ="prenom";
    $nom="nom";
    $prix="100";
    $today = date("d-m-Y");
    $type = "recus";
  }
  else{
    $recu1 = "recud";
    $mois = "mois";
    $date = date("d/m/Y");
    $location = "recu";
    $local = 'local';
    $prenom ="prenom";
    $nom="nom";
    $prix="10000";
    $today = date("d-m-Y");
    $type = "recus";
  }

  include 'recu/recu.php'; ?>

<hr class="ligne">
