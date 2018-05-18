<?php session_start(); ?>
<div>
<a data-rel="dialog" data-transition="pop" href="index.php?action=addP">Ajout d'une pièce</a><br/><br/>

  </div>
    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contacts as $info){ ?>
        <div data-role="collapsible" >
             <h2><?php echo $info->getNomP(); ?></h2>

            <div class='ui-field-contain'>
                <label for='Comediens'>Comediens: </label>
                <?php ?> 
            </div>
            <div class='ui-field-contain'>
                <label for='dateP'>Date de Sortie: </label>
                <?php echo $info->getDateP();  ?>
            </div>
            <div class='ui-field-contain'>
                <label for='realisateurP'>Réalisateur: </label>
                <?php echo $info->getRealisateurP(); ?>
            </div>
             
            <?php $_SESSION['piece']=$info->getIdP();?>     
             
             <?php var_dump($_SESSION)['piece'] ?>

             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=detailsP&idP=
             <?php echo $info->getIdP();?>">Modifier la piece "  <?php echo $info->getNomP(); ?>" </a>
             <br>
             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=detailsCP&idP=
             <?php echo $info->getIdP();?>">Liste des comediens de "  <?php echo $info->getNomP(); ?>" </a>
             </div>
    <?php }?>
        
    </ul>

