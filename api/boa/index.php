<?php
  include '../../nav.php';
  require '../rb-sqlite.php';
  R::setup( 'sqlite:../baseTest.db' );

  if(!isset($_POST['prenom'])){?>
    <div class="container">
      Ceci est une API test <?php
      //include 'addForm.php';
      include 'form.php';


      ?>



      <!-- <div class="card"> -->
        <?php
        //include 'getAll.php' ?>
      <!-- </div> -->
    </div><?php
  } ?>
