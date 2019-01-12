<style>
  .titre{
    width: 80px;
  }
</style>

<div class="col-xs-12">
  <div class="panel panel-primary text-center">
    <h4>Liste des Clients présents</h4>
  </div>
</div><?php
$reponse = $bdd->prepare('  SELECT * FROM loc_clients WHERE depart=0  ORDER BY local1 ');
$reponse->execute(array());
$n=1;
while ($donnees = $reponse->fetch()) { ?>
<!-- =========================================================================== -->

  <div class="col-xs-6 col-sm-4 col-md-4">
    <div class="box box-primary box-solid ">
			<div class="box-header box-primary">
				<div class="box-title pull-right"><?php
					echo $donnees['local1']; ?>
				</div>
			</div>
    	<div class="row">
  	  	<div class="col-xs-12">
  	  		<div class="box-body">
  			    <label class="titre">Prénom :   	</label>	<?php echo $donnees['prenom']; ?> 		<br>
  			    <label class="titre">Nom :      	</label>	<?php echo $donnees['nom']; ?>  		<br>
  			    <label class="titre">Id :			</label>	<?php echo $donnees['ci']; ?>  			<br>
  			    <label class="titre">Téléphone :	</label>	<?php echo $donnees['telephone']; ?>  	<br>
				<label class="titre">Arrivée :		</label>	<?php echo $donnees['arrivee']; ?> 	 	<br>
				<label class="titre">Contrat :		</label>	<?php echo $donnees['contrat']; ?> 	 	<br>
				<label class="titre">Prix :			</label>	<?php echo $donnees['prix']; ?> 	 	<br>
  			  </div>
  	  	</div>

        <div class="col-xs-12">
          <a href="index.php?Maion=client_mod&client_id=<?php echo $donnees['id']; ?>" class="btn btn-primary">Modifier</a>
        </div>
    	</div>
    </div>
  </div> <?php } $reponse->closeCursor(); ?>



	<!-- ************************************************************************************************* -->

	<div class="col-xs-12">
	  <div class="panel panel-danger text-center ">
	    <h4>Liste des Clients partis</h4>
	  </div>
	</div><?php
	$reponse = $bdd->prepare('  SELECT * FROM location_clients WHERE depart!=0  ORDER BY local1 ');
	$reponse->execute(array());
	$n=1;
	while ($donnees = $reponse->fetch()) { ?>
	<!-- =========================================================================== -->

	  <div class="col-xs-6 col-sm-4 col-md-4">
	    <div class="box box-danger box-solid ">
				<div class="box-header box-danger">
					<div class="box-title pull-right"><?php
						echo $donnees['local1']; ?>
					</div>
				</div>
	    	<div class="row">
	  	  	<div class="col-xs-12">
	  	  		<div class="box-body">
	  			    <label class="titre">Prénom :   	</label>	<?php echo $donnees['prenom']; ?> 		<br>
	  			    <label class="titre">Nom :      	</label>	<?php echo $donnees['nom']; ?>  			<br>
	  			    <label class="titre">Id :					</label>	<?php echo $donnees['ci']; ?>  				<br>
	  			    <label class="titre">Téléphone :	</label>	<?php echo $donnees['telephone']; ?>  <br>
							<label class="titre">Arrivée :		</label>	<?php echo $donnees['arrivee']; ?> 	 	<br>
							<label class="titre">Contrat :		</label>	<?php echo $donnees['contrat']; ?> 	 	<br>
							<label class="titre">Prix :				</label>	<?php echo $donnees['prix']; ?> 	 		<br>
	  			  </div>
	  	  	</div>

	        <div class="col-xs-12">
	          <a href="index.php?Admin=user_mod&user_id=<?php echo $donnees['id']; ?>" class="btn btn-danger">Modifier</a>
	        </div>
	    	</div>
	    </div>
	  </div> <?php } $reponse->closeCursor(); ?>
