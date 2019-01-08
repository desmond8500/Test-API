<?php
  include '../../nav.php';
  require '../rb-sqlite.php';
  require '../Form.php';
  R::setup( 'sqlite:../baseTest.db' );

  if(!isset($_POST['prenom'])){?>
    <div class="container">
      <p>Ceci est une API de gestion de journaux</p>

      <form action="create.php" method="post" enctype="multipart/form-data" class="card">
        <div class="form-row"><?php
          Form::inputText('titre','Titre');
          Form::inputText('date','jj/mm/aaaa', date('d/m/Y'));
          Form::textarea('Description');
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
