<?php
  include '../config.php';
  $id = htmlspecialchars($_GET['id']);

  $journal =  R::getAll( 'SELECT * FROM journal WHERE id = :id', [':id' => $id] );  ?>

  <form action="update.php" method="post" enctype="multipart/form-data">
    <input type="text" name="id" id="id" value="<?php echo $journal[0]['id']; ?>">
    <input type="text" name="titre" id="titre" value="<?php echo $journal[0]['titre']; ?>">
    <input type="text" name="date" id="date" value="<?php echo $journal[0]['date']; ?>">
    <textarea name="description" id="description" rows="2" cols="20"><?php echo $journal[0]['description']; ?></textarea>
    <input type="submit"  value="Modifier">
  </form>
