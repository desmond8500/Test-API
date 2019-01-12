<?php setlocale(LC_MONETARY, 'fr_FR');

// Client


    /*
    $nom = htmlspecialchars($_GET['nom']);
    $delivre = htmlspecialchars($_GET['delivre']);
    $local = htmlspecialchars($_GET['local']);
    $prix = htmlspecialchars($_GET['prix']);
    $contrat = htmlspecialchars($_GET['contrat']);
    $prix = htmlspecialchars($_GET['prix']);
    $id = htmlspecialchars($_GET['id']);
    */
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

<div class="col-md-12" >
<h3 class="text-center">ENGAGEMENT  DE LOCATION  VERBALE  A DUREE DETERMINEE  (01 AN RENOUVELABLE)</h3>
<br>
<p class="text-justify">
Entre:
Le  bailleur M. <b>Momar  DIAGNE</b>, <b>PC n° 327812 du 09 Juin 1999</b> et Le preneur, <b><?php echo $nom ?></b>, <b>CI N° <?php echo $id ?></b>, délivrée  le  <b><?php echo $delivre ?></b> qui s’engage  à prendre en location les locaux dont la désignation suit : Villa n° 180, Cité HILAL,
 <b><?php echo $local ?></b>, sans qu’il soit nécessaire de désigner les lieux plus amplement, les connaissant pour les avoir visités. <br>
Cette location qui prendra effet le <b><?php echo $date ?></b> est usage d’habitation.
Elle est consentie au prix de <b><?php echo  $prix ?> francs CFA</b> payable par terme mensuel et d’avance au plus tard le 05 de chaque mois.<br><br>
A cela  il faut ajouter

<?php if ($local=="Comico A" || $local=="Comico B")
	echo "la taxe d’enregistrement sur location de <b>".$contrat."</b> francs  à verser à   la signature du présent contrat.";


	else
	echo "la taxe d’enregistrement sur location de <b>".$contrat."</b> francs  à verser à   la signature du présent contrat.";


 ?>


</p>
<p class="text-justify">
Le présent contrat est renouvelable  annuellement.
Le preneur reconnait par la présente, prendre les lieux loués en bon état  de réparations locatives et s’engage en conséquence à le rendre au moment de son départ, en parfait état d’entretien.
Il s’engage à satisfaire à toutes les charges de voirie de police et hygiène qui incombent aux locataires, y compris l’entretien et le remplacement des grillages et moustiquaires endommagés, afin qu’aucun recours ne puisse être exercé à cet égard par le propriétaire.
</p>
<p class="text-justify">
<b><u>CAUTION :</u></b> <br>
Le preneur verse  à titre de caution  la somme de  <b><?php echo $caution ?> F CFA</b>
Cette somme non productible d’intérêt, ne sera remboursée qu’après :
<ul type="1">
	<li>Avoir restitué les lieux, loués  en parfait état locatif (notamment révision installation de plomberie, électricité, réfection des peintures et dans tous les cas la remise des clefs).</li>
	<li>Avoir payé son loyer jusqu'à la date échue du préavis ou du mois de la remise des clefs si celle-ci est postérieure au préavis.</li>
</ul>
</p>
<p class="text-justify">
A défaut il sera prélevé sur la dite caution les sommes correspondantes aux frais de remise en état des lieux, ainsi que montant des factures d’eau, d’électricité, et de vidange non réglées. Il demeure bien entendu que ces formalités de remise en état et de résiliation des travaux devront être effectuées pendant la période du préavis
</p>

<br>


<b><u>CAUSE RESOLUTOIRE :</u></b><br>
<p class="text-justify">
A défaut  de paiement à son échéance d’un seul terme de loyer ou d’inexécution de l’une des conditions qui précédent, le présent contrat sera résilié de plein droit trente (30) jours après un simple commandement de payer ou de mise en demeure d’exécuter resté sans qu’il soit besoin de remplir d’autres formalités judiciaires. Une simple ordonnance de référé autorisant l’expulsion et nonobstant toutes offres ou consignes ultérieures et attributions est donnée au président du tribunal statuant en référé pour ordonner dans ce vas l’expulsion du locataire.<br>
En cas de procédure, les frais de celle-ci et les honoraires de l’avocat sont à la charge du locataire.
</p>
<?php setlocale (LC_TIME, 'fr_FR.utf8','fra'); ?>
<p class="pull-right">Fait à Dakar, le <?php echo $date ?> </p><br>


<div>LE PRENEUR</div><div class="pull-right">LE BAILLEUR</div>

<br>
<br>
<br>

</div>
