<?php
  $citations = file_get_contents('http://api.yonkou.info/api/citations/api/readAll.php');
  var_dump($citations);
  file_put_contents('downloadme.json',$citations);

?>
