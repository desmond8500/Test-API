<form action="api/create.php" method="post" enctype="multipart/form-data">
  <div class="form-row"><?php
    Form::inputText('auteur','Auteur');
    Form::textarea('Citation');
    Form::submit(); ?>
</form>
<hr>
<a href=".">Retour</a>
