<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<?php include '../0 base/config.php'; ?>
<div class="container">

  <div class="col-xs-6 col-md-4">
    <form action="recu.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="location">Objet</label>
        <select id="location" name="location"  class="form-control">
          <option value="recu">recu</option>
          <option value="caution">caution</option>
        </select>
      </div>

      <div class="form-group">
        <label for="nom_ajout_loc">Nom</label>
        <select name="nom_ajout_loc" id="nom_ajout_loc" class="form-control"><?php
          $clients = R::getAll( 'SELECT * FROM locclient' );
          foreach ($clients as $key => $client) {
            echo '<option value="'.$client['local1'].'">'.$client['prenom'].' '.$client['nom'].'</option>';
          } ?>
        </select>
      </div>

      <label for="nom_ajout_loc">Mois</label><?php
        Form::selectMonth();
        $date1 = date("Y-m-d"); ?>

      <div class="form-group">
        <label for="date2">Date de réglement</label>
        <input type="text" id="date2" name="date2" class="form-control" value="<?php echo $client['arrivee'] ?>">
      </div>

      <button type="submit" class="btn btn-primary">Valider</button>
    </form>
  </div>

</div>
