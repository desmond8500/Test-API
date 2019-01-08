<?php

class Form{
  function __construct() {

  }

  public static function inputText($name,$placeholder,$value=""){?>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="<?php echo $name ?>" name="<?php echo $name ?>" placeholder="<?php echo $name ?>" value="<?php echo $value ?>">
    </div><?php
  }
  public static function textarea($name,$test=null){?>
    <div class="form-group col-md-12">
      <textarea name="<?php echo strtolower($name) ?>" placeholder="<?php echo $name ?>" class="form-control" id="<?php echo strtolower($name) ?>" rows="4" cols="40"><?php
       if($test!=null)
       echo $test;?></textarea>
    </div><?php
  }
  public static function select($name,$select){?>
    <div class="form-group col-md-4">
      <select id="<?php echo $name ?>" name="<?php echo $name ?>" class="form-control"><?php
      foreach ($select as $key => $option) {?>
        <option value="<?php echo $key ?>"><?php echo $option ?></option><?php
      } ?>
      </select>
    </div><?php
  }
  public static function submit($name="Valider"){?>
    <div class="form-group col-md-6">
      <button type="submit" class="btn btn-primary"><?php echo $name ?></button>
    </div> <?php
  }
}


 ?>
