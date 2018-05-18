
<a data-rel="dialog" data-transition="pop" href="index.php?action=addC">Ajout d'un Comédien</a><br/><br/>
    <ul data-role="listview" class="ui-listview-outer"> 
    <?php foreach($contacts as $info){ ?>
        <div data-role="collapsible" >
             <h2><?php echo $info->getNomC()," ", $info->getPrenomC();?></h2>
              
             <div class='ui-field-contain'>
                <label for='naissanceC'>Née le: </label>
                <?php echo $info->getNaissanceC();  ?>
            </div>
           
             <div class='ui-field-contain'>
                <label for='ageC'>Age: </label>
                <?php echo $info->getAgeC(); ?>
            </div> 
             
             <div class='ui-field-contain'>
                <label for='nationaliteC'>Nationalite: </label>
                <?php  echo $info->getNationaliteC(); ?> 
            </div>
             <a class="modPrescL" data-rel="dialog" data-transition="pop"  href="index.php?action=detailsC&idC=
             <?php echo $info->getIdC();?>">Modifier le comedien "  <?php echo $info->getNomC(); ?>" </a>
    <?php }?>
       
    </ul>
