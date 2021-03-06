<div class="container">
  <?php include '../0 base/config.php'; ?>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <div class="col-xs-12 col-md-4">
    <form action="Sites/Maison/ajout1.php" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="nom_ajout_loc">Nom</label>
        <select name="nom_ajout_loc" id="nom_ajout_loc" class="form-control"><?php
          $clients = R::getAll( 'SELECT * FROM locclient' );
          var_dump($clients);
          foreach ($clients as $key => $client) {
            echo '<option value="'.$client['local1'].'">'.$client['prenom'].' '.$client['nom'].'</option>';
          } ?>
        </select>
      </div>

      <div class="form-group">
        <label for="objet">Objet</label>
        <select name="objet" id="objet" class="form-control"><?php
       include "task_select.php" ?>
        </select>
      </div>

      <?php $date1 = date("Y-m-d"); ?>

      <div class="form-group">
        <label for="date1">Date</label>
        <input type="text" id="date1" name="date1" class="form-control" value="<?php echo $date1 ?>" >
      </div>

      <div class="form-group">
        <label for="mois">Mois</label>
        <select name="mois" id="mois" class="form-control">
          <option value="Janvier">Janvier</option>
          <option value="Fevrier">Février</option>
          <option value="Mars">Mars</option>
          <option value="Avril">Avril</option>
          <option value="Mai">Mai</option>
          <option value="Juin">Juin</option>
          <option value="Juillet">Juillet</option>
          <option value="Aout">Aout</option>
          <option value="Septembre">Septembre</option>
          <option value="Octobre">Octobre</option>
          <option value="Novembre">Novembre</option>
          <option value="Decembre">Decembre</option>
        </select>
      </div>

      <div class="form-group">
        <label for="montant">Montant</label>
        <input type="text" id="montant" name="montant" class="form-control">
      </div>
      <button type="submit" class="btn btn-primary">Valider</button>
    </form>
  </div>

</div>
