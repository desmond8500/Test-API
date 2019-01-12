<div class="col-xs-6 col-md-4">
  <form action="index.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="location">Objet</label>
      <select id="location" name="location"  class="form-control">
        <option value="recu">recu</option>
        <option value="caution">caution</option>
      </select>
    </div>

    <div class="form-group">
      <label for="nom">Nom</label>
      <select name="nom" id="nom" class="form-control"><?php
        $n=0;
        $req = $bdd->prepare('SELECT * FROM loc_clients ORDER BY local1 ');
        $req->execute(array());

        while ($donnees = $req->fetch()){
          echo '<option value="'.$donnees['local1'].'">'.$donnees['prenom'].' '.$donnees['nom'].'</option>';  }
        $req->closeCursor(); ?>
      </select>
    </div>

    <input type="text" id="Maison" name="Maison" hidden>

    <div class="form-group">
      <label for="month">Mois</label>
      <select name="month" id="month" class="form-control">
        <option value="Janvier" >Janvier</option>
        <option value="Fevrier">Fevrier</option>
        <option value="Mars" >Mars</option>
        <option value="Avril">Avril</option>
        <option value="Mai">Mai</option>
        <option value="Juin">Juin</option>
        <option value="Juillet">Juillet</option>
        <option value="Aout">Aout</option>
        <option value="Septembre">Septembre</option>
        <option value="Octobre">Octobre</option>
        <option value="Novembre" selected="">Novembre</option>
        <option value="Decembre">Decembre</option>
      </select>
    </div><?php   $date1 = date("Y-m-d"); ?>

    <div class="form-group">
      <label for="date2">Date de réglement</label>
      <input type="text" id="date2" name="date2" class="form-control" value="<?php echo $donnees['arrivee'] ?>">
    </div>

    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
</div>
