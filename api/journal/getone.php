<?php
// Récupérer les données de la base
$nom = 'Todoroki';
$users =  R::getAll( 'SELECT * FROM journal WHERE nom = :nom', [':nom' => $nom] );;

?>
<table class="table">
  <tr>
    <th width:"10px">#</th>
    <th>Prenom</th>
    <th>Nom</th>
  </tr><?php
  foreach ($users as $key => $user) {?>
    <tr>
      <td><?php echo $user['id']; ?></td>
      <td><?php echo $user['prenom']; ?></td>
      <td><?php echo $user['nom']; ?></td>
    </tr> <?php
  } ?>

</table>
