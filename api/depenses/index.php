<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<a href="../../">Acceuil</a> <br><br><?php
  require '../rb-sqlite.php';
  require '../Form.php';
  R::setup( 'sqlite:../baseTest.db' );

  if(!isset($_POST['prenom'])){?>
    <div class="container">
      Ceci est une API de gestion de dépenses

      <form action="create.php" method="post" enctype="multipart/form-data" class="card">
        <div class="form-row"><?php
          Form::inputText('objet','Objet');
          Form::select('type',array('Entrée','Dépense'));
          Form::inputText('montant','Montant');
          Form::inputText('date','Date');
          Form::submit();
         ?>
      </form>

      <div class="card"><?php
        include 'getAll.php' ?>
      </div>
    </div><?php
  }

  else{
    if(isset($_POST['prenom'])){
      var_dump($_POST);
    }
  } ?>
