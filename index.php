<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<?php
  require 'src/rb-sqlite.php';
  R::setup( 'sqlite:src/baseTest.db' );

  if(!isset($_POST['prenom'])){?>
    <div class="container"><?php
      include "page/index.php"; ?>
      <div class="card"><?php
        include 'api/getAll.php' ?>
      </div>
    </div><?php
  }

  else{
    if(isset($_POST['prenom'])){
      var_dump($_POST);
    }
  } ?>
