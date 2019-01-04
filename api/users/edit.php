  <?php
    include '../config.php';
    $id = htmlspecialchars($_GET['id']);

    $user =  R::getAll( 'SELECT * FROM journal WHERE id = :id', [':id' => $id] );  ?>

    <form action="update.php" method="post" enctype="multipart/form-data">
      <input type="text" name="id" id="id" value="<?php echo $user[0]['id']; ?>">
      <input type="text" name="prenom" id="prenom" value="<?php echo $user[0]['prenom']; ?>">
      <input type="text" name="nom" id="nom" value="<?php echo $user[0]['nom']; ?>">
      <input type="submit"  value="Modifier">
    </form>
