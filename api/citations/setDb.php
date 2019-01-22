<?php
  $test1 = file_get_contents('myConfig.json');
  $config = json_decode($test1);
  // var_dump($config->mysql[0]->hostname);
  // echo "$config->sgbd <br />"; ?>
 <form action="index.php" method="post"><?php
    Form::select("sgbd",array("sqlite","mysql"));
    Form::submit(); ?>
 </form> <?php

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

  ?>
