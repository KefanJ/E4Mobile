<?php session_start(); ?>
<div>
<a data-rel="dialog" data-transition="pop" href="index.php?action=addT">Ajout d'un Theatre</a><br/><br/>

  </div>
    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contacts as $info){ ?>
        <div data-role="collapsible" >
             <h2><?php echo $info->getNomT(); ?></h2>
             

            <div class='ui-field-contain'>
                <label for='rueT'>Rue : </label>
                <?php echo $info->getRueT(); ?> 
            </div>
            <div class='ui-field-contain'>
                <label for='villeT'>Ville : </label>
                <?php echo $info->getVilleT();  ?>
            </div>
            <div class='ui-field-contain'>
                <label for='codePT'>Code postal : </label>
                <?php echo $info->getCodePT(); ?>
            </div>
             
            <?php $_SESSION['theatre']=$info->getIdT();?>     
             
             

             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=detailsT&idT=
             <?php echo $info->getIdT();?>">Modifier le Theatre "  <?php echo $info->getNomT(); ?>" </a>
             <br>
             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=detailsTP&idPiece=
             <?php echo $info->getIdT();?>">Liste des pièce au théatre "  <?php echo $info->getNomT(); ?>" </a>
             </div>
             
             
    <?php }?>
        
    </ul>

