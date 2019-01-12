<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
<?php date_default_timezone_set('Africa/Dakar'); ?>
<div class="container">
  <div class="col-xs-12 col-md-4">
    <form action="client_add1.php" method="post" enctype="multipart/form-data">

      <div class="form-group">
        <label for="nom_ajout_loc">Titre</label>
      <input type="text" name="titre" id="titre" placeholder="Titre" class="form-control">
      </div>

      <div class="form-group">
        <label for="nom_ajout_loc">Prenom</label>
      <input type="text" name="prenom" id="prenom" placeholder="prenom" class="form-control">
      </div>

      <div class="form-group">
        <label for="nom_ajout_loc">Nom</label>
      <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control">
      </div>

      <div class="form-group">
        <label for="nom_ajout_loc">Carte d'identité</label>
      <input type="text" name="idcard" id="idcard" placeholder="Numéro de carte d'identité" class="form-control">
      </div>

      <div class="form-group">
        <label for="delivrance">Date de délivrance</label>
      <input type="text" name="delivrance" id="delivrance" placeholder="Date de délivrance" class="form-control">
      </div>

      <div class="form-group">
        <label for="prix">Montant</label>
      <input type="text" name="prix" id="prix" placeholder="Montant de la location" class="form-control">
      </div>

      <div class="form-group">
        <label for="nom">Contrat</label>
      <input type="text" name="contrat" id="contrat" placeholder="Montant du contrat" class="form-control">
      </div>

      <div class="form-group">
        <label for="Telephone">Telephone</label>
      <input type="text" name="Telephone" id="Telephone" placeholder="Numéro de téléphne" class="form-control">
      </div>

      <div class="form-group">
        <label for="local1">Local</label>
        <select name="local1" id="local1" class="form-control">
          <optgroup label="Appartements">
            <option value="A11">A11</option>
            <option value="A12">A12</option>
            <option value="A13">A13</option>
            <option value="A14">A14</option>
          </optgroup>
          <optgroup label="Comico">
            <option value="ComicoA">ComicoA</option>
            <option value="ComicoB">ComicoB</option>
          </optgroup>
        </select>
      </div>



      <?php $date1 = date("Y-m-d"); ?>

      <div class="form-group">
        <label for="date1">Date</label>
        <input type="text" id="date1" name="date1" class="form-control" value="<?php echo $date1 ?>" >
      </div>


      <button type="submit" class="btn btn-primary">Valider</button>
    </form>
  </div>

</div>
