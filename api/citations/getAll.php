<?php
// Récupérer les données de la base
$citations = R::getAll( 'SELECT * FROM citations' ); ?>

<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Citation</th>
    <th>Auteur</th>
    <th>Editer</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($citations as $key => $citation) {?>
    <tr>
      <td><?php echo $citation['id']; ?></td>
      <td><?php echo $citation['citation']; ?></td>
      <td><?php echo $citation['auteur']; ?></td>
      <td><a href="edit.php?id=<?php echo $citation['id']; ?>">Modifier</a></td>
      <td><a href="delete.php?id=<?php echo $citation['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
