  <?php
    include '../config.php';
    $id = htmlspecialchars($_GET['id']);

    $depense =  R::getAll( 'SELECT * FROM depenses WHERE id = :id', [':id' => $id] );  ?>

    <form action="update.php" method="post" enctype="multipart/form-data">
      <input type="text" name="id" id="id" value="<?php echo $depense[0]['id']; ?>">
      <input type="text" name="objet" id="objet" value="<?php echo $depense[0]['objet']; ?>">
      <input type="text" name="type" id="type" value="<?php echo $depense[0]['type']; ?>">
      <input type="text" name="montant" id="montant" value="<?php echo $depense[0]['montant']; ?>">
      <input type="text" name="date" id="date" value="<?php echo $depense[0]['date']; ?>">
      <input type="submit"  value="Modifier">
    </form>
