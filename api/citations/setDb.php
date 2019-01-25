<?php
  $test1 = file_get_contents('myConfig.json');
  $config = json_decode($test1);
  echo "$config->sgbd <br />";
  if(!isset($_POST['sgbd'])){?>
    <form action="setDb.php" method="post"><?php
       Form::select("sgbd",array("sqlite","mysql"));
       Form::submit(); ?>
    </form> <?php
  }

  if(isset($_POST['sgbd'])){
    $post = htmlentities($_POST['sgbd']);
    echo "$post";

    $config->sgbd = $post;
    $myconfig = json_encode($config);
    file_put_contents('myConfig.json', $myconfig);

    header("location: index.php");
  }
?>
