<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<a href="../../">Acceuil</a> <br><br><?php
  require '../rb-sqlite.php';
  R::setup( 'sqlite:../baseTest.db' );

  if(!isset($_POST['prenom'])){?>
    <div class="container">
      Ceci est une API de gestion de dépenses

      <form action="create.php" method="post" enctype="multipart/form-data" class="card">
        <div class="form-group">
          <input class="for-control" type="text" id="objet" name="objet" placeholder="Objet">
          <input class="for-control" type="text" id="type" name="type" placeholder="Type">
          <input class="for-control" type="text" id="montant" name="montant" placeholder="Montant">
          <input class="for-control" type="text" id="date" name="date" placeholder="date">
          <input type="submit" value="Valider">
        </div>
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
