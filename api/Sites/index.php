<?php
  include '../../nav.php';
  require '../rb-sqlite.php';
  require '../Form.php';
  R::setup( 'sqlite:../baseTest.db' ); ?>


    <div class="container">
      <p>Ceci est une API de gestion de sites interessants</p>

      <form action="create.php" method="post" enctype="multipart/form-data" class="card">
        <div class="form-row"><?php
          Form::inputText('nom','Nom');
          Form::inputText('lien','Lien');
          Form::textarea('Description');
          Form::submit();
         ?>
      </form>

      <div class="card"><?php
        include 'getAll.php' ?>
      </div>
    </div>
