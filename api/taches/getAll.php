<?php
// Récupérer les données de la base
$taches = R::getAll( 'SELECT * FROM taches' ); ?>

<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Titre</th>
    <th>Description</th>
    <th>Date</th>
    <th>Editer</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($taches as $key => $tache) {?>
    <tr>
      <td><?php echo $tache['id']; ?></td>
      <td><?php echo $tache['titre']; ?></td>
      <td><?php echo $tache['description']; ?></td>
      <td><?php echo $tache['date']; ?></td>
      <td><a href="edit.php?id=<?php echo $tache['id']; ?>">Modifier</a></td>
      <td><a href="delete.php?id=<?php echo $tache['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
