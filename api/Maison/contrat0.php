<?php setlocale(LC_MONETARY, 'fr_FR');

// Client
  include 'client/kora.php';


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
<h3 class="text-center">ENGAGEMENT  DE LOCATION  VERBALE  A DUREE DETERMINEE  <br> (01 AN RENOUVELABLE)</h3>
<br>
<p class="text-justify">
Entre:
Le  bailleur M. <b>Momar  DIAGNE</b>, <b>PC n° 327812 du 09 Juin 1999</b> et Le preneur, <b><?php echo $nom ?></b>, <b>CI N° <?php echo $id ?></b>, délivrée  le  <b><?php echo $delivre ?></b> qui s’engage  à prendre en location les locaux dont la désignation suit : Villa n° 180, Cité HILAL,
 <b><?php echo $nom ?></b>, sans qu’il soit nécessaire de désigner les lieux plus amplement, les connaissant pour les avoir visités. <br>
Cette location qui prendra effet le <b>1er janvier 2017</b> est usage d’habitation.
Elle est consentie au prix de <b><?php echo  $prix ?> francs CFA</b> payable par terme mensuel et d’avance au plus tard le 05 de chaque mois.<br><br>
A cela  il faut ajouter

<?php if ($local=="ComicoA" || $local=="ComicoB")
	echo "la taxe d’enregistrement sur location de <b>".$contrat."</b> francs  à verser à   la signature du présent contrat";


	else
	echo ":
<ul>
	<li>la contribution mensuelle aux frais de vidange et de curage de la fosse sceptique qui est de <b>2 000 </b>francs par mois</li>
	<li>la taxe d’enregistrement sur location de <b>".$contrat."</b> francs  à verser à   la signature du présent contrat</li>
</ul>";


 ?>


</p>
<p class="text-justify">
Le présent contrat est renouvelable  annuellement.
Le loyer est portable et non quérable  à Mr Momar DIAGNE, Villa n° 179A, cité Hilal, km 8, BBC Dakar.
Le preneur reconnait par la présente, prendre les lieux loués en bon état  de réparations locatives et s’engage en conséquence à le rendre au moment de son départ, en parfait état d’entretien.
Il s’engage formellement à acquitter exactement, pendant toute la durée de son occupation, les taxes d’égouts, d’eau, d’électricité, ses  contributions personnelles et mobilières ainsi  que la taxe d’enlèvement d’ordure ménagère, la taxe d’enregistrement sur location de manière à ce qu’aucun recours ne puisse être exercé à cet égard contre le propriétaire.
Il s’engage à satisfaire à toutes les charges de voirie de police et hygiène qui incombent aux locataires, y compris l’entretien et le remplacement des grillages et moustiquaires endommagés, afin qu’aucun recours ne puisse être exercé à cet égard par le propriétaire.
</p>
<p class="text-justify">
<b><u>CAUTION :</u></b> <br>
Le preneur verse  à titre de caution  la somme de  <b><?php echo $prix*2 ?> F CFA</b>
Cette somme non productible d’intérêt, ne sera remboursée qu’après :
<ul type="a">
	<li>Avoir restitué les lieux, loués  en parfait état locatif (notamment révision installation de plomberie, électricité, réfection des peintures et dans tous les cas la remise des clefs).</li>
	<li>Avoir obtenu de la SENEGALAISE DES EAUX (SDE) un quitus attestant le paiement des factures pendant la période d’occupation et jusqu’au jour du constat de départ.</li>
	<li>Avoir rapporté la feuille de résiliation de son contrat d’électricité.</li>
	<li>Avoir payé son loyer jusqu'à la date échue du préavis ou du mois de la remise des clefs si celle-ci est postérieure au préavis.</li>
	<li>Avoir repris la peinture (la chambre que vous venez de louer a été entièrement repeinte).</li>
</ul>
</p>
<p class="text-justify">
A défaut il sera prélevé sur la dite caution les sommes correspondantes aux frais de remise en état des lieux, ainsi que montant des factures d’eau, d’électricité, et de vidange non réglées. Il demeure bien entendu que ces formalités de remise en état et de résiliation des travaux devront être effectuées pendant la période du préavis
</p>

<p class="text-justify">
Il est entendu que la présente location est régie par les  Dispositions Civiles et Commerciales  de la  République du Sénégal relatives aux baux. L’attention du ou des preneurs, a été particulièrement  attirée sur la teneur des articles cités :   <br>
<ul class="list-unstyled">
	<li><b><u>ARTICLE 1 :</u></b></li>
	Le preneur est  à trois (03) obligations principales :
		<ol>
			<li>D’user sur la chose louée en bon père de famille et suivant la destination qui lui a été donnée par le bail ou suivant cette présumée d’après la convocation.</li>
			<li>De payer le terme du bail au terme convenu</li>
			<li>De  veiller à ne pas troubler la jouissance paisible des voisins par le bruit, les odeurs, la fumée, ou autrement de son fait de ses ayants-droits ou de ses proposés.</li>
		</ol>
	<li><b><u>ARTICLE 2 :</u></b></li>
		S’il n’a pas fait d’état des lieux, le preneur est présumé les avoir reçus en bon état de réparation locative et doit  les rendre tels qu’il les  a trouvés au moment de la prise des clefs, sauf la preuve du contraire.
	<li><b><u>ARTICLE 3 :</u></b></li>
		Il répond à l’incendie à moins qu’il ne prouve que l’incendie est arrivé par cas de fortuit ou force majeure ou par vice de construction ou que le feu a été comminutif par une maison voisine.
	<li><b><u>ARTICLE 4 :</u></b></li>
	<p class="text-justify">
		Il répond des dégradations ou pertes qui arrivent pendant sa jouissance à moins qu’il prouve qu’elles ont eu lieu sans faute.
		En conséquence des articles ci-dessus, le preneur accepte toutes détériorations qu’elles soient et notamment carreaux cassés, clefs perdues, murs tachés, grillages moustiquaires cassés ou déchirées, etc..., soient à sa charge.
		Un état des lieux sera dressé avant son départ. Il devra verser une provision suffisante pour couvrir les réparations qui seront jugées  nécessaires et qui lui seront imputables.
		ll est rappelé que les frais  de débouchage de toutes les canalisations notamment celle du « tout à l’égout » est toujours à la charge du locataire.<br>
		Pour garantir les recours du preneur contre le propriétaire en cas d’incendie, de vol ou de dégâts des eaux, le preneur s’engage à assurer ses risques locatifs ainsi que les objets garnissant les lieux loués à une Compagnie D’Assurance Notaire solvable au moment de son entré en jouissance.<br>
		Le preneur s’interdit de sous-louer ou de céder son droit au présent contrat sans en référer au propriétaire ou son représentant suivant les dispositifs de la loi n°66-70 du 13 juillet 1966.
		</p>
	<li><b><u>ARTICLE 5 :</u></b></li>
		Lorsque le preneur aura reçu ou donné congé, le bailleur pourra faire mettre un écriteau à l’emplacement de son choix indiquant que les lieux sont à louer. Le preneur devra laisser les jours ouvrables sur rendez-vous au moins 3 fois par semaine. Il en serait de même en cas de mise en vente des locaux
	<li><b><u>ARTICLE 6 :</u></b></li>
		Lorsque  le preneur a l’intention de quitter le logement, il devra en informer le bailleur avec un préavis de deux (02) mois. Si c’est ce dernier qui souhaite reprendre son logement, il devra en informer le locataire avec un préavis de six (06) mois.
</ul><br>


<b><u>CAUSE RESOLUTOIRE :</u></b><br>
<p class="text-justify">
A défaut  de paiement à son échéance d’un seul terme de loyer ou d’inexécution de l’une des conditions qui précédent, le présent contrat sera résilié de plein droit trente (30) jours après un simple commandement de payer ou de mise en demeure d’exécuter resté sans qu’il soit besoin de remplir d’autres formalités judiciaires. Une simple ordonnance de référé autorisant l’expulsion et nonobstant toutes offres ou consignes ultérieures et attributions est donnée au président du tribunal statuant en référé pour ordonner dans ce vas l’expulsion du locataire.<br>
En cas de procédure, les frais de celle-ci et les honoraires de l’avocat sont à la charge du locataire
</p>
<?php setlocale (LC_TIME, 'fr_FR.utf8','fra'); ?>
<p class="pull-right">Fait à Dakar, le <?php echo $date ?> </p><br>


<div>LE PRENEUR</div><div class="pull-right">LE BAILLEUR</div>



</div>
