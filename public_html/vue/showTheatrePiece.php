
<?php
// Tout début du code PHP. Situé en haut de la page web
ini_set("display_errors",0);error_reporting(0);
?>
<h1>Liste des pièces</h1>
<a data-rel="dialog" data-transition="pop" href="index.php?action=addTP">Ajout d'une piece</a><br/><br/>
    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contacts as $info){ ?>
        <div data-role="collapsible" >
             <h2>   
                 
               
                
                <?php $onePiece = Passerelle::getOnePiece($info->getIdPiece());

                       echo $onePiece->getNomP();
                       
                      
                      
                 ?>
        </div>
        
        <?php               $idPiece=$info->getIdTP();
                             $idPiece=$idPiece+0;
        ?>
           <?php  echo "<a rel=\"external\" href=\"javascript:deleteEntryTP($idPiece)\">Supprimer cette saisie</a>";                  ?>
             
 <?php }?>
    </ul>
   
