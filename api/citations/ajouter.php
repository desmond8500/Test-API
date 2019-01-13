<form action="api/create.php" method="post" enctype="multipart/form-data" class="card">
  <div class="form-row"><?php
    Form::inputText('auteur','Auteur');
    Form::textarea('Citation');
    Form::submit(); ?>
</form>
