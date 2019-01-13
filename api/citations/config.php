<?php   session_start();
  if(basename(getcwd())!="api")
    $prefix="";
  else
    $prefix="../";

  require $prefix."../rb-sqlite.php";
  require $prefix."../Parsedown.php";
  require $prefix."../Form.php";
  R::setup( "sqlite:".$prefix."baseTest.db");
  date_default_timezone_set('Africa/Dakar');
 ?>
