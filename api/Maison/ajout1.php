<?php        session_start();    include "../Admin/database.php";
            $local = htmlspecialchars($_POST['nom_ajout_loc']);
            $objet = htmlspecialchars($_POST['objet']);
            $montant = htmlspecialchars($_POST['montant']);
            $date1 = htmlspecialchars($_POST['date1']);
            $mois = htmlspecialchars($_POST['mois']);

            var_dump($_POST);

            $req = $bdd->prepare('SELECT * FROM location_clients WHERE local1=? ');
            $req->execute(array($local));

            while ($donnees = $req->fetch()){
                $nom = $donnees['prenom'].' '.$donnees['nom'];
            }
            $req->closeCursor();



            $req = $bdd->prepare('INSERT INTO location_mensualite(nom,mois,local, montant, objet, date1)
                                      VALUES(:nom,:mois,:local, :montant, :objet, :date1)');
            $req->execute(array(
                'nom' => $nom,
                'mois' => $mois,
                'local' => $local,
                'montant' => $montant,
                'objet' => $objet,
                'date1' => $date1
                ));
            $req->closeCursor();

            echo 'La tache a bien été ajoutée ! <br>';
            $_SESSION['redirection']="Entree_maison";
            header("Location: /index.php")
 ?>
