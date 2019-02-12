<?php
  require 'config.php';
  include '../../nav.php'; ?>

  <div class="container"><?php
    if(isset($_GET['action'])){
      $action = htmlspecialchars($_GET['action']);
      if($action=="ajouter")
        include 'ajouter.php';
      elseif($action=="lister")
        include 'getAll.php';
      elseif($action=="setdb")
        include 'setDb.php';
      elseif($action=="upload")
        include 'transfert.php';
      elseif($action=="download")
        include 'download.php';
      elseif($action=="save"){
        $citations = R::findall( 'citations' );
        $list = json_encode($citations);
        file_put_contents('saveme.json',$list);
      }
      elseif($action=="random"){
        $test = file_get_contents('http://localhost/Dev/API/Generic/Test%20API/api/citations/api/readrandom.php');
        $reponse = json_decode($test);
        ?>
        <blockquote class="blockquote">
          <p><?php echo $reponse->citation; ?></p>
          <footer class="blockquote-footer"><?php echo $reponse->auteur; ?></footer>
        </blockquote>
        <a href=".">Retour</a> <?php
      }

    }
    else{
      $Parsedown = new Parsedown();
      echo $Parsedown->text(file_get_contents('README.md'));
    }
    ?>
  </div>
