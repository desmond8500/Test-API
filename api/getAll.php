<?php
// Récupérer les données de la base
$users = R::getAll( 'SELECT * FROM users' ); ?>

<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Prenom</th>
    <th>Nom</th>
    <th>Editer</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($users as $key => $user) {?>
    <tr>
      <td><?php echo $user['id']; ?></td>
      <td><?php echo $user['prenom']; ?></td>
      <td><?php echo $user['nom']; ?></td>
      <td><a href="api/edit.php?id=<?php echo $user['id']; ?>">Modifier</a></td>
      <td><a href="api/delete.php?id=<?php echo $user['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
