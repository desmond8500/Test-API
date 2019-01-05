  <?php
    include '../config.php';
    require '../Form.php';
    $id = htmlspecialchars($_GET['id']);

    $site =  R::getAll( 'SELECT * FROM sites WHERE id = :id', [':id' => $id] );  ?>

    <form action="update.php" method="post" enctype="multipart/form-data">
      <div class="form-row"><?php
        Form::inputText('id','id',$site[0]['id']);
        Form::inputText('lien','Lien',$site[0]['lien']);
        Form::inputText('nom','Nom',$site[0]['nom']);
        Form::textarea('description',$site[0]['description']);
        Form::submit('Modifier');
       ?>
      </div>
    </form>
