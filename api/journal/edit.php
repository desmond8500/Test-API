<?php
  include '../config.php';
  $id = htmlspecialchars($_GET['id']);

  $journal =  R::getAll( 'SELECT * FROM journals WHERE id = :id', [':id' => $id] );  ?>

  <form action="update.php" method="post" enctype="multipart/form-data">
    <input type="text" name="id" id="id" value="<?php echo $journal[0]['id']; ?>">
    <input type="text" name="prenom" id="prenom" value="<?php echo $journal[0]['prenom']; ?>">
    <input type="text" name="nom" id="nom" value="<?php echo $journal[0]['nom']; ?>">
    <input type="submit"  value="Modifier">
  </form>
