
<div class="col-xs-12 col-md-12">
	<div class="panel">
		<table class="table table-bordered" >
			<tr>
				<th colspan="14" class="text-center">Etat du <?php echo date('d-m-Y') ?></th>
			</tr>
			<tr class="bg-primary">
				<td class="text-center">#</td>
				<td>Prenom et Nom</td>
				<td class="text-center">1</td>
				<td class="text-center">2</td>
				<td class="text-center">3</td>
				<td class="text-center">4</td>
				<td class="text-center">5</td>
				<td class="text-center">6</td>
				<td class="text-center">7</td>
				<td class="text-center">8</td>
				<td class="text-center">9</td>
				<td class="text-center">10</td>
				<td class="text-center">11</td>
				<td class="text-center">12</td>
			</tr><?php 			//mette la liste des clients dans un tableau $loc
			$depart = 0;

			$req = $bdd->prepare('SELECT * FROM location_clients WHERE local1!="ComicoA" AND local1!="ComicoB" /*AND depart=?*/ ORDER BY local1');
		$req->execute(array(/*$depart*/));
			$n=1;

			while ($donnees = $req->fetch()){
				$loc[] = array($donnees['local1'],$donnees['prenom'].' '.$donnees['nom'],"-","-","-","-","-","-","-","-","-","-","-","-","-") ;
			}
			$req->closeCursor();

			//trier les mensualités
			for($i=0;$i<15; $i++){
				$req = $bdd->prepare('SELECT * FROM location_mensualite WHERE local=? AND date1>"2017-01-31"');
				$req->execute(array($loc[$i][0]));
				while ($donnees = $req->fetch()){
					$mois = explode("-", $donnees['date1']);
					if($donnees['mois']=="Janvier")
						$loc[$i][2]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Février" || $donnees['mois']=="Fevrier")
						$loc[$i][3]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Mars")
						$loc[$i][4]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Avril")
						$loc[$i][5]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Mai")
						$loc[$i][6]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Juin")
						$loc[$i][7]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Juillet")
						$loc[$i][8]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Aout" || $donnees['mois']=="Août")
						$loc[$i][9]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Septembre")
						$loc[$i][10]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Octobre")
						$loc[$i][11]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Novembre")
						$loc[$i][12]=$mois[2].'-'.$mois[1];
					elseif($donnees['mois']=="Decembre")
						$loc[$i][13]=$mois[2].'-'.$mois[1];

					if($donnees['objet']=="Caution")
						$loc[$i][]="C";}
				$req->closeCursor();
			}

			for($i=0;$i<19; $i++){
				echo '<tr class="bg-info">';
				for($j=0;$j<14; $j++){
					if($j==0 OR $j==1)
						echo '<td><b>'.$loc[$i][$j].'</b></td>';
					else
						echo '<td class="text-center"><a href="index.php?Maison=Print_Recu&nom='.$loc[$i][0].'&date='.$loc[$i][14].'">'.$loc[$i][$j] .'</a></td>';
				}
				echo '</tr>';
			}			?>
		</table>
	</div>
</div>
