<?php include '../0 base/config.php' ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

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
$clients = R::getAll( 'SELECT * FROM locclient' );
$n =1;
foreach ($clients as $key => $client) { ?>
<!-- =========================================================================== -->

  <div class="col-xs-6 col-sm-4 col-md-4">
    <div class="box box-primary box-solid ">
			<div class="box-header box-primary">
				<div class="box-title pull-right"><?php
					echo $client['local1']; ?>
				</div>
			</div>
    	<div class="row">
  	  	<div class="col-xs-12">
  	  		<div class="box-body">
  			    <label class="titre">Prénom :   	</label>	<?php echo $client['prenom']; ?> 		<br>
  			    <label class="titre">Nom :      	</label>	<?php echo $client['nom']; ?>  		<br>
  			    <label class="titre">Id :			</label>	<?php echo $client['ci']; ?>  			<br>
  			    <label class="titre">Téléphone :	</label>	<?php echo $client['telephone']; ?>  	<br>
				<label class="titre">Arrivée :		</label>	<?php echo $client['arrivee']; ?> 	 	<br>
				<label class="titre">Contrat :		</label>	<?php echo $client['contrat']; ?> 	 	<br>
				<label class="titre">Prix :			</label>	<?php echo $client['prix']; ?> 	 	<br>
  			  </div>
  	  	</div>

        <div class="col-xs-12">
          <a href="index.php?Maion=client_mod&client_id=<?php echo $client['id']; ?>" class="btn btn-primary">Modifier</a>
        </div>
    	</div>
    </div>
  </div> <?php }  ?>



	<!-- ************************************************************************************************* -->

	<div class="col-xs-12">
	  <div class="panel panel-danger text-center ">
	    <h4>Liste des Clients partis</h4>
	  </div>
	</div><?php
  $clients = R::getAll( 'SELECT * FROM locclient' );
  $n =1;
  foreach ($clients as $key => $client) {  ?>
	<!-- =========================================================================== -->

	  <div class="col-xs-6 col-sm-4 col-md-4">
	    <div class="box box-danger box-solid ">
				<div class="box-header box-danger">
					<div class="box-title pull-right"><?php
						echo $client['local1']; ?>
					</div>
				</div>
	    	<div class="row">
	  	  	<div class="col-xs-12">
	  	  		<div class="box-body">
	  			    <label class="titre">Prénom :   	</label>	<?php echo $client['prenom']; ?> 		<br>
	  			    <label class="titre">Nom :      	</label>	<?php echo $client['nom']; ?>  			<br>
	  			    <label class="titre">Id :					</label>	<?php echo $client['ci']; ?>  				<br>
	  			    <label class="titre">Téléphone :	</label>	<?php echo $client['telephone']; ?>  <br>
							<label class="titre">Arrivée :		</label>	<?php echo $client['arrivee']; ?> 	 	<br>
							<label class="titre">Contrat :		</label>	<?php echo $client['contrat']; ?> 	 	<br>
							<label class="titre">Prix :				</label>	<?php echo $client['prix']; ?> 	 		<br>
	  			  </div>
	  	  	</div>

	        <div class="col-xs-12">
	          <a href="index.php?Admin=user_mod&user_id=<?php echo $client['id']; ?>" class="btn btn-danger">Modifier</a>
	        </div>
	    	</div>
	    </div>
	  </div> <?php }  ?>
