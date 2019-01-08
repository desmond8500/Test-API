  <?php
    include '../config.php';
    require '../Form.php';
    $id = htmlspecialchars($_GET['id']);

    $citation =  R::getAll( 'SELECT * FROM citations WHERE id = :id', [':id' => $id] );  ?>

    <form action="update.php" method="post" enctype="multipart/form-data">
      <div class="form-row"><?php
        Form::inputText('id','id',$citation[0]['id']);
        Form::inputText('auteur','Auteur',$citation[0]['auteur']);
        Form::textarea('Citation',$citation[0]['citation']);
        Form::submit('Modifier');
       ?>
      </div>
    </form>
