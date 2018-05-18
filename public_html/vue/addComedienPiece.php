<?php session_start(); ?>
<form method='post' rel='external' >

      <input type='hidden' name='action' value='insertCP'/>
            <input type='hidden' name='idCP' value='-1'/>
            <fieldset>      
               <div class='ui-field-contain'>
                    <label for="idC">Comédien</label>
                    <select name="idCom"  data-iconpos="left">
                        <?php foreach($comdedien as $info){
                                 echo "<option  value='".$info->getIdC()."'>".$info->getNomC()." ".$info->getPrenomC()."</option>";
                                 
                                 }?>
                    </select>
                <div class='ui-field-contain'>
                    <label for='idPie'>Date de Sortie</label>
                   <input type='date' name='idPie' maxlength='200' id='idPie' value='' />
                   
                   
                   
                    <input type='hidden' name='idPie' id='idPie'value=''<?php echo $_SESSION['piece'];?> />
                </div>
            <button type="submit" value="Save"  >Sauvegarder le comédien</button>
        </form>

