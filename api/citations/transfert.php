<?php
  $citations = file_get_contents('saveme.json');
  $list = json_decode($citations);
  foreach ($list as $key => $citation) {
    $cite = R::dispense('citations');
    //$cite->id = $citation->id;
    $cite->auteur = $citation->auteur;
    $cite->citation = $citation->citation;
    $id = R::store( $cite );
    echo "$id <br />";
  }
?>
