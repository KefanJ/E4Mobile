<?php session_start(); ?>
<div>
<a data-rel="dialog" data-transition="pop" href="index.php?action=addT">Ajout d'un Theatre</a><br/><br/>

  </div>
    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contacts as $info){ ?>
        <div data-role="collapsible" >
             <h2><?php echo $info->getNomP(); ?></h2>

            <div class='ui-field-contain'>
                <label for='adresse'>Adresse </label>
                <?php echo $info->getAdresseT(); ?> 
            </div>
            <div class='ui-field-contain'>
                <label for='piece'>Piece </label>
                <?php echo $info->getIdTP();  ?>
            </div>
            <div class='ui-field-contain'>
                <label for='dateT'>Date de la pièce: </label>
                <?php echo $info->getDateT(); ?>
            </div>
             
            <?php $_SESSION['theatre']=$info->getIdT();?>     
             
             <?php var_dump($_SESSION)['theatre'] ?>

             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=detailsT&idT=
             <?php echo $info->getIdP();?>">Modifier la piece "  <?php echo $info->getNomP(); ?>" </a>
             <br>
             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=detailsTP&idT=
             <?php echo $info->getIdP();?>">Liste des pieces "  <?php echo $info->getNomP(); ?>" </a>
             </div>
    <?php }?>
        
    </ul>

