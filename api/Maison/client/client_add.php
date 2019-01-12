<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<?php include '../0 base/config.php';?>
<div class="container">
  <form action="client_add1.php" method="post" enctype="multipart/form-data"><?php
    Form::inputText('titre',"Titre");
    Form::inputText('prenom',"Prénom");
    Form::inputText('nom',"Nom");
    Form::inputText('idcard',"numéro de carte d'identité");
    Form::inputText('delivrance',"Date de délivrance");
    Form::inputText('prix',"Montant");
    Form::inputText('contrat',"Contrat");
    Form::inputText('Telephone',"Téléphone");
    Form::inputText('date1', 'date',date("Y-m-d"));

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
