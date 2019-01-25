<?php
  include '../Form.php';
  include '../../nav.php';
  $test1 = file_get_contents('myConfig.json');
  $config = json_decode($test1);
  // var_dump($config->mysql[0]->hostname);
  // echo "$config->sgbd <br />"; ?>
 <form action="index.php" method="post"><?php
    Form::select("sgbd",array("sqlite","mysql"));
    Form::submit(); ?>
 </form> <?php
 //echo $config->mysql[0]->hostname;

  if(isset($_POST['sgbd'])){
    $post = htmlentities($_POST['sgbd']);
    echo "$post";

    if($post=="sqlite"){
      $config->sgbd = $post;
      $myconfig = json_encode($config);
      file_put_contents('myConfig.json', $myconfig);
    }
    else{
      $config->sgbd = $post;
      $myconfig = json_encode($config);
      file_put_contents('myConfig.json', $myconfig);
    }
  }
  include '../rb.php';
  //R::setup( 'mysql:host=localhost;dbname=smi_api', 'root', 'root' );
  $host ="mysql-smi.alwaysdata.net";
  $base ="smi_api";
  $user ="smi_api";
  $pass ="frZ@45";
  R::setup( "mysql:host=$host;dbname=$base", $user, $pass );
  $test = R::getAll( 'SELECT * FROM citations' );


  ?>
