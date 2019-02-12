<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous"><?php
  include '../0 base/config.php';

  $id = htmlspecialchars($_POST['id']);
  $client =  R::getAll( 'SELECT * FROM locclient WHERE id = :id', [':id' => $id] );

  ?>
<div class="container">
  <form action="client_add1.php" method="post" enctype="multipart/form-data"><?php
    Form::inputText('titre',"Titre",$client['titre']);
    Form::inputText('prenom',"Prénom",$client['prenom']);
    Form::inputText('nom',"Nom",$client['nom']);
    Form::inputText('idcard',"numéro de carte d'identité",$client['ci']);
    Form::inputText('delivrance',"Date de délivrance",$client['delivre']);
    Form::inputText('prix',"Montant",$client['prix']);
    Form::inputText('contrat',"Contrat",$client['contrat']);
    Form::inputText('Telephone',"Téléphone",$client['telephone']);
    Form::inputText('date1', 'date');

    $local = array(
      'A11' => 'A11',
      'A12' => 'A12',
      'A13' => 'A13',
      'A14' => 'A14',
      'ComicoA' => 'ComicoA',
      'ComicoB' => 'ComicoB',
   );

    Form::select('local1',$local);
    Form::submit(); ?>
  </form>
</div>
