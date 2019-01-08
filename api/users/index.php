<?php
  include '../../nav.php';
  require '../rb-sqlite.php';
  R::setup( 'sqlite:../baseTest.db' );

  if(!isset($_POST['prenom'])){?>
    <div class="container">
      Gestion des utilisateurs

      <form action="create.php" method="post" enctype="multipart/form-data" class="card">
        <div class="form-group">
          <input class="for-control" type="text" id="prenom" name="prenom" placeholder="Prénom">
          <input class="for-control" type="text" id="nom" name="nom" placeholder="Nom">
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
