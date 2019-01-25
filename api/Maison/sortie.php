<div class="col-xs-12">
  <div class="panel panel-primary text-center">
    <h4>Liste des Clients présents</h4>
  </div>
</div>

<div class="col-xs-12">
	<a href="index.php?Maison=Sortie&mois=1"  class="btn btn-primary">1</a>
	<a href="index.php?Maison=Sortie&mois=2"  class="btn btn-primary">2</a>
	<a href="index.php?Maison=Sortie&mois=3"  class="btn btn-primary">3</a>
	<a href="index.php?Maison=Sortie&mois=4"  class="btn btn-primary">4</a>
	<a href="index.php?Maison=Sortie&mois=5"  class="btn btn-primary">5</a>
	<a href="index.php?Maison=Sortie&mois=6"  class="btn btn-primary">6</a>
	<a href="index.php?Maison=Sortie&mois=7"  class="btn btn-primary">7</a>
	<a href="index.php?Maison=Sortie&mois=8"  class="btn btn-primary">8</a>
	<a href="index.php?Maison=Sortie&mois=9"  class="btn btn-primary">9</a>
	<a href="index.php?Maison=Sortie&mois=10" class="btn btn-primary">10</a>
	<a href="index.php?Maison=Sortie&mois=11" class="btn btn-primary">11</a>
	<a href="index.php?Maison=Sortie&mois=12" class="btn btn-primary">12</a>
</div>



<?php
if (isset($_GET['mois'])) {
	$debut 	= "2017-".$_GET['mois']."-01";
	$fin 	= "2017-".$_GET['mois']."-30";

	$reponse = $bdd->prepare('  SELECT * FROM loc_sortie WHERE date_sortie>? AND date_sortie<?');
	$reponse->execute(array($debut,$fin));
}
else{
	$reponse = $bdd->prepare('  SELECT * FROM loc_sortie ');
	$reponse->execute(array());
}

$n=1; ?>
  <div class="col-xs-6 col-sm-12 col-md-12">
    <div class="box box-primary box-solid ">
		<div class="box-header box-primary">
			<div class="box-title pull-right">Dépenses	</div>
		</div>
    	<div class="row">
	  	  	<div class="col-xs-12">
	  	  		<div class="box-body">
					<table class="table table-hover table-bordered">
						<thead>
							<tr>
								<th>Objet</th>
								<th>Type</th>
								<th>Montant</th>
								<th>Date</th>
								<th>Piece jointe</th>
							</tr>
						</thead>
						<tbody><?php while ($donnees = $reponse->fetch()) { ?>
							<tr>
								<td><?php echo $donnees['objet_sortie']; ?> </td>
								<td><?php echo $donnees['type']; ?> </td>
								<td><?php echo $donnees['montant_sortie']; ?> </td>
								<td><?php echo $donnees['date_sortie']; ?> </td>
								<td><?php echo $donnees['images']; ?> </td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
	  			  </div>
	  	  	</div>        
    	</div>
    </div>
</div> <?php  
$reponse->closeCursor(); ?>


