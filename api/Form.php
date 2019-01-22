<?php

class Form{
  function __construct() {

  }

  public static function inputText($name,$placeholder,$value=""){?>
    <div class="form-group col-md-6">
      <input type="text" class="form-control" id="<?php echo $name ?>" name="<?php echo $name ?>" placeholder="<?php echo $placeholder; ?>" value="<?php echo $value ?>">
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
    <div class="form-group col-md-6">
      <select id="<?php echo $name ?>" name="<?php echo $name ?>" class="form-control"><?php
      foreach ($select as $key => $option) {?>
        <option value="<?php echo $option ?>"><?php echo $option ?></option><?php
      } ?>
      </select>
    </div><?php
  }
  public static function selectMonth($name="mois"){?>
    <div class="form-group col-md-6">
      <select name="<?php echo $name; ?>" id="<?php echo $name; ?>" class="form-control">
        <option value="Janvier"   <?php if(date('m')=='01') echo 'selected=""'; ?>>Janvier</option>
        <option value="Fevrier"   <?php if(date('m')=='02') echo 'selected=""'; ?>>Fevrier</option>
        <option value="Mars"      <?php if(date('m')=='03') echo 'selected=""'; ?>>Mars</option>
        <option value="Avril"     <?php if(date('m')=='04') echo 'selected=""'; ?>>Avril</option>
        <option value="Mai"       <?php if(date('m')=='05') echo 'selected=""'; ?>>Mai</option>
        <option value="Juin"      <?php if(date('m')=='06') echo 'selected=""'; ?>>Juin</option>
        <option value="Juillet"   <?php if(date('m')=='07') echo 'selected=""'; ?>>Juillet</option>
        <option value="Aout"      <?php if(date('m')=='08') echo 'selected=""'; ?>>Aout</option>
        <option value="Septembre" <?php if(date('m')=='09') echo 'selected=""'; ?>>Septembre</option>
        <option value="Octobre"   <?php if(date('m')=='10') echo 'selected=""'; ?>>Octobre</option>
        <option value="Novembre"  <?php if(date('m')=='11') echo 'selected=""'; ?>>Novembre</option>
        <option value="Decembre"  <?php if(date('m')=='12') echo 'selected=""'; ?>>Decembre</option>
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
