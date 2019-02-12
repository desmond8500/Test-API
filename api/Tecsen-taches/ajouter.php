<form action="api/create.php" method="post" enctype="multipart/form-data">
  <div class="form-row"><?php
    Form::inputText('site','Site');
    Form::inputText('date','Date');
    Form::textarea('Description');
    Form::submit(); ?>
</form>
<hr>
<a href=".">Retour</a>
