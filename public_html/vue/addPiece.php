	<form method='post' rel='external'  onsubmit='return checkFormP();'>
            <input type='hidden' name='action' value='insertP'/>
            <input type='hidden' name='idP' value='-1'/>
            <fieldset>
                <div class='ui-field-contain'>
                    <label for='nomP'>Piece</label>
                    <input type='text' name='nomP' maxlength='100' id='nomP' value='' />
                </div>
               

                <div class='ui-field-contain'>
                    <label for='dateP'>Date de Sortie</label>
                    <input type='date' name='dateP' id='dateP' value='' />
                </div>

                <div class='ui-field-contain'>
                    <label for='realisateurP'>Metteur en scène</label>
                    <input type='text' name='realisateurP' maxlength='200' id='realisateurP' value='' />
                </div>
             
                
                
            <fieldset>
            <button type="submit" value="Save" >Sauvegarder la pièces</button>
        </form>

