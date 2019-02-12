<?php

$taches = R::findAll( 'taches' ); ?>
<a href=".">Retour</a> <hr>
<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Site</th>
    <th>Description</th>
    <th>Editer</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($taches as $key => $tache) {?>
    <tr>
      <td><?php echo $tache['id']; ?></td>
      <td><?php echo $tache['site']; ?></td>
      <td><?php echo $tache['description']; ?></td>
      <td><a href="edit.php?id=<?php echo $tache['id']; ?>">Modifier</a></td>
      <td><a href="api/delete.php?id=<?php echo $tache['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
<hr>
<a href=".">Retour</a>
