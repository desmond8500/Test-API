<?php include '../Form.php'; ?>
<form action="create.php" method="post" enctype="multipart/form-data" >
  <div class="form-row"><?php
    Form::inputText('prenom','Prénom',"sdfsdf");
    Form::textarea('description');
    Form::submit();


     ?>
  </div>
</form>
