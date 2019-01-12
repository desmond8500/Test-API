<?php        session_start();    include '../config.php';
  // Créer un objet utilisateur
  $client= R::dispense( 'locclient' );

  $client->local    = htmlspecialchars($_POST['nom_ajout_loc']);
  $client->objet    = htmlspecialchars($_POST['objet']);
  $client->montant  = htmlspecialchars($_POST['montant']);
  $client->date1    = htmlspecialchars($_POST['date1']);
  $client->mois     = htmlspecialchars($_POST['mois']);
s
  $clients = R::getAll( 'SELECT * FROM locclient' );

            $req = $bdd->prepare('SELECT * FROM location_clients WHERE local1=? ');
            $req->execute(array($local));s

            while ($donnees = $req->fetch()){
                $nom = $donnees['prenom'].' '.$donnees['nom'];
            }
            $req->closeCursor();

            // Enregistrer le contenu de l'ojet dans la base de donnée
            $id = R::store( $client );

            echo 'La tache a bien été ajoutée ! <br>';
            $_SESSION['redirection']="Entree_maison";
            header("Location: /index.php")
 ?>
