<?php
// Récupérer les données de la base
$users = R::getAll( 'SELECT * FROM depenses' ); ?>

<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Objet</th>
    <th>Type</th>
    <th>Montant</th>
    <th>Date</th>
    <th>Modifier</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($users as $key => $user) {?>
    <tr>
      <td><?php echo $user['id']; ?></td>
      <td><?php echo $user['objet']; ?></td>
      <td><?php echo $user['type']; ?></td>
      <td><?php echo $user['montant']; ?></td>
      <td><?php echo $user['date']; ?></td>
      <td><a href="edit.php?id=<?php echo $user['id']; ?>">Modifier</a></td>
      <td><a href="delete.php?id=<?php echo $user['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
