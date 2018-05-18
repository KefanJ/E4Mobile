	<form method='post' rel='external'  onsubmit='return checkFormT();'>
            <input type='hidden' name='action' value='insertT'/>
            <input type='hidden' name='idT' value='-1'/>
            <fieldset>
                <div class='ui-field-contain'>
                    <label for='nomT'>Nom</label>
                    <input type='text' name='nomT' maxlength='100' id='nomT' value='' />
                </div>
               

                <div class='ui-field-contain'>
                    <label for='adresseT'>Adresse</label>
                    <input type='text' name='adresseT' id='dateP' value='' />
                </div>

                <div class='ui-field-contain'>
                    <label for='idP'>Nom pièce</label>
                    <input type='text' name='idP' maxlength='200' id='realisateurP' value='' />
                </div>
             
                
                <div class='ui-field-contain'>
                    <label for='dateT'>Date de la pièce</label>
                    <input type='date' name='dateT' maxlength='200' id='dateT' value='' />
                </div>
                
                
            <fieldset>
            <button type="submit" value="Save" >Sauvegarder le theatre</button>
        </form>


