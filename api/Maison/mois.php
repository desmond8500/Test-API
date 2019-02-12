<div class="col-xs-12 col-md-8">
	<div class="row">
		<div class="col-xs-12 col-md-12" >
<?php
				$req = $bdd->prepare('SELECT * FROM clients ORDER BY local1');
				$req->execute(array());
				$n=1;
		echo '	<table class="table table-bordered" >';		
		echo '		<tr>
						<td>#</td>
						<td>Nom</td>
						<td>Montant</td>
						<td>Identification</td>
						<td>Reçu</td>
						<td>Contrat</td>

					</tr>';
				while ($donnees = $req->fetch())
				{
		
		echo '		<tr>
						<td class="text-center">'.$donnees['local1'].'</td>
						<td>'.$donnees['prenom'].' '.$donnees['nom'].'</td>
						<td class="text-right">'.$donnees['prix'].'</td>
						<td>'.$donnees['ci'].'</td>
						<td><a href="recu.php">Reçu</a></td>
						<td><a href="contrat.php">Reçu</a></td>



					</tr>';
					$n++;
		
				}
				$req->closeCursor();
		echo ' 	</table>';			
?>
		</div>
	</div>
</div>