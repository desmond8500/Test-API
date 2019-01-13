<?php
  session_start();
  require '../rb-sqlite.php';
  require "../Parsedown.php";
  require "../Form.php";
  R::setup( 'sqlite:../baseTest.db');
  date_default_timezone_set('Africa/Dakar');
 ?>
