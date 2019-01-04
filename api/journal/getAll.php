<?php
// Récupérer les données de la base
$journaux = R::getAll( 'SELECT * FROM journal' ); ?>

<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Titre</th>
    <th>Description</th>
    <th>Date</th>
    <th>Editer</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($journaux as $key => $journal) {?>
    <tr>
      <td><?php echo $journal['id']; ?></td>
      <td><?php echo $journal['titre']; ?></td>
      <td><?php echo $journal['description']; ?></td>
      <td><?php echo $journal['date']; ?></td>
      <td><a href="edit.php?id=<?php echo $journal['id']; ?>">Modifier</a></td>
      <td><a href="delete.php?id=<?php echo $journal['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
