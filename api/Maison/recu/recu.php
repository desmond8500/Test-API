
<fieldset class='box-primary'>
  <div class='titre g'>QUITTANCE DE LOYER</div>
    <div class='entete'>
      Momar DIAGNE <br>
      Tel: 77 647 27 35 <br>
      Cité Hilal, Km 8 BCCD <br>
    </div>
    <div class='date'>
      Date: <?php
      echo $today."<br />"; ?>
      Logement: <?php echo $local; ?>
    </div>
    <div class='bod'>
      Reçu de M. <span class='g'><?php echo $prenom." ".$nom; ?></span>, la somme de <span class='g'> <?php echo number_format($prix, 0, ',', ' '); ?> Francs </span> au titre du paiement <?php
      if($type=="recu")
        echo "du loyer";
      else
        echo "de la caution";?> du logement sis au 180, cité Hilal, Km 8 Boulecard de la commune de Dakar. <br><br>

    <div class='periode'>
      Période du 01 <?php echo $mois; ?> 2018 au 30 <?php echo $mois; ?> 2018
    </div>
    <div class='periode'>
      Date de règlement: <?php echo $date; ?>
    </div>
</fieldset>
