<?php
  require 'config.php';
  include '../../nav.php';
  ?>

    <div class="container"><?php
      if(isset($_GET['action'])){
        $action = htmlspecialchars($_GET['action']);
        if($action=="ajouter")
          include 'ajouter.php';
        elseif($action=="lister")
          include 'getAll.php';

      }


      else{
        $Parsedown = new Parsedown();
        echo $Parsedown->text(file_get_contents('README.md'));
      }


      ?>




    </div>
