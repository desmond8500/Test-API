<?php
// Récupérer les données de la base
$agences = R::getAll( 'SELECT * FROM agences' ); ?>

<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Siège</th>
    <th>Agence</th>
    <th>Enregisteur</th>
    <th>Caméras</th>
    <th>Stockage</th>
    <th>Type</th>
    <th>Mot de passe</th>
    <th>Date de début</th>
    <th>Date de fin</th>

    <th>Editer</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($agences as $key => $agence) {?>
    <tr>
      <td><?php echo $agence['id']; ?></td>
      <td><?php echo $agence['siege']; ?></td>
      <td><?php echo $agence['agence']; ?></td>
      <td><?php echo $agence['enregistreur']; ?></td>
      <td><?php echo $agence['cameras']; ?></td>
      <td><?php echo $agence['disque']; ?></td>
      <td><?php echo $agence['type']; ?></td>
      <td><?php echo $agence['pass']; ?></td>
      <td><?php echo $agence['date_debut']; ?></td>
      <td><?php echo $agence['date_fin']; ?></td>
      <td><a href="edit.php?id=<?php echo $agence['id']; ?>">Modifier</a></td>
      <td><a href="delete.php?id=<?php echo $agence['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
