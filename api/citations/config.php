<?php   session_start();
  if(basename(getcwd())!="api")
    $prefix="";
  else
    $prefix="../";

  require $prefix."../rb.php";
  require $prefix."../Parsedown.php";
  require $prefix."../Form.php";
  date_default_timezone_set('Africa/Dakar');

  $dbConfigFile = file_get_contents($prefix.'myConfig.json');
  $config = json_decode($dbConfigFile);

  if($config->sgbd=="sqlite"){
    R::setup( "sqlite:".$prefix."baseTest.db");
  }
  elseif($config->sgbd=="mysql"){
    $host = $config->mysql[0]->hostname;
    $base = $config->mysql[0]->database;
    $user = $config->mysql[0]->user;
    $pass = $config->mysql[0]->password;
    R::setup( "mysql:host=$host;dbname=$base", $user, $pass );
  }
 ?>
