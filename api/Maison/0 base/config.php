<?php
  session_start();
  require '../0 base/rb-sqlite.php';
  R::setup( 'sqlite:../0 base/baseTest.db' );
  include '../../Form.php';
  date_default_timezone_set('Africa/Dakar');
 ?>
