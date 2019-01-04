<?php
// Récupérer les données de la base
$users = R::getAll( 'SELECT * FROM journal' ); ?>

<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Titre</th>
    <th>Description</th>
    <th>Date</th>
    <th>Editer</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($users as $key => $user) {?>
    <tr>
      <td><?php echo $user['id']; ?></td>
      <td><?php echo $user['titre']; ?></td>
      <td><?php echo $user['description']; ?></td>
      <td><?php echo $user['date']; ?></td>
      <td><a href="edit.php?id=<?php echo $user['id']; ?>">Modifier</a></td>
      <td><a href="delete.php?id=<?php echo $user['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
