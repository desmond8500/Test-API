
<?php 		
function link_button($dir,$h1,$titre,$col)
{
	$a=0; //Variable pour le choisir qu'une seule image
   	if($dossier = opendir($dir))// ouvrir le dossier et le stocker
	{
		while(false !== ($fichier = readdir($dossier))) // lire le fichier
		{
			if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
				{// fichers à ne pas prendre en compte
				$a=strrchr($fichier,'.');
				if ($a==0){
					echo '						
						  <div class="'.$col.'">
						    <div class="thumbnail">';
					echo '<img src="'.$dir.$fichier.'"' ;
					echo "	    </div>
							<p style='height:".$h1."' class='text-center'>".$titre."</p>
						  </div> ";
				}					
				$a++;					
			}  
		}	
		closedir($dossier); 	 
		}
		else
			echo 'Le dossier n\' a pas pu être ouvert'; 
}
/**********************************************************************************/?>

