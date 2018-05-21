<?php session_start();?>
<?php
// Tout début du code PHP. Situé en haut de la page web
ini_set("display_errors",0);error_reporting(0);
?>
<h1>Liste des comediens</h1>
<a data-rel="dialog" data-transition="pop" href="index.php?action=addCP">Ajout d'un comédien</a><br/><br/>
    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contacts as $info){ ?>
        <div data-role="collapsible" >
             <h2>   
                <?php $oneComedien = Passerelle::getOneComedien($info->getIdCom());

                       echo $oneComedien->getNomC();
                       echo ' ';
                       echo $oneComedien->getPrenomC();
                      
                 ?>
        </div>
        
        <?php               $idCom=$info->getIdCP();
                             $idCom=$idCom+0;
        ?>
        
       
           <?php  echo "<a rel=\"external\" href=\"javascript:deleteEntryCP($idCom)\">Supprimer cette saisie</a>";     ?>
         <?php echo $_SESSION['comedien'] = $comedien->getIdP();?>
            
 <?php }?>
    </ul>
   