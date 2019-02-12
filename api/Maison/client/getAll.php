<?php include '../0 base/config.php';
$sites = R::getAll( 'SELECT * FROM locclient' ); ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Prénom</th>
    <th>Nom</th>
    <th>Local</th>
    <th>Editer</th>
    <th>Supprimer</th>
  </tr><?php
  foreach ($sites as $key => $site) {?>
    <tr>
      <td><?php echo $site['id']; ?></td>
      <td><?php echo $site['prenom']; ?></td>
      <td><?php echo $site['nom']; ?></td>
      <td><?php echo $site['local1']; ?></td>
      <td><a href="edit.php?id=<?php echo $site['id']; ?>">Modifier</a></td>
      <td><a href="delete.php?id=<?php echo $site['id']; ?>">Supprimer</a></td>
    </tr> <?php
  }  ?>
</table>
