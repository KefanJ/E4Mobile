<?php session_start(); ?>
<form method='post' rel='external' >

      <input type='hidden' name='action' value='insertTP'/>
            <input type='hidden' name='idTP' value='-1'/>
            <fieldset>      
               <div class='ui-field-contain'>
                    <label for="idCom">Pièce</label>
                    <select name="idCom"  data-iconpos="left">
                        <?php foreach($piece as $info){
                                 echo "<option  value='".$info->getIdP()."'>".$info->getNomP()."</option>";
                                
                                 }?>
                    </select>
                <div class='ui-field-contain'>
                       <input type='hidden' name='idThe' id='idThe' value='<?php echo $_SESSION['theatre'];?>' />
                           
                                               

                </div>
            <button type="submit" value="Save"  >Sauvegarder la piece</button>
        </form>

 ?>


