<div class="col-xs-12 col-md-12">
	<div class="panel"><?php

$m= date("m");
$debut="2016-12-30";
$fin = "2016-10-30";
				$req = $bdd->prepare('SELECT * FROM mensualite  ');
				$req->execute(array());
				$n=0;
		echo '	<table class="table table-bordered" >	
					<tr>
						<th>#</th>
						<th>Nom</th>
						<th>Montant</th>
						<th>Date</th>
					</tr>';
				while ($donnees = $req->fetch())
				{		
					if ($donnees['date1']=="")
		echo '		<tr class="danger">';
					else
		echo '		<tr>';	
		echo '			
						<td>'.$donnees['local'].'</td>
						<td>'.$donnees['nom'].'</td>
						<td>'.$donnees['montant'].'</td>
						<td >'.$donnees['date1'].'</td>

					</tr>';
					$n++;		
				}
				$req->closeCursor();
		echo ' 	</table>';			
?>
	</div>
</div>
