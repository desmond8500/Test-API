<?php
// Récupérer les données de la base
$sites = R::getAll( 'SELECT * FROM sites' ); ?>

<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Nom</th>
    <th>description</th>
    <th>lien</th>
    <th>Editer</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($sites as $key => $site) {?>
    <tr>
      <td><?php echo $site['id']; ?></td>
      <td><?php echo $site['nom']; ?></td>
      <td><?php echo $site['description']; ?></td>
      <td><?php echo $site['lien']; ?></td>
      <td><a href="edit.php?id=<?php echo $site['id']; ?>">Modifier</a></td>
      <td><a href="delete.php?id=<?php echo $site['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
