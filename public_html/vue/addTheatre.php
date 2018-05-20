	<form method='post' rel='external'  onsubmit='return checkFormT();'>
            <input type='hidden' name='action' value='insertT'/>
            <input type='hidden' name='idT' value='-1'/>
            <fieldset>
                <div class='ui-field-contain'>
                    <label for='nomT'>Nom</label>
                    <input type='text' name='nomT' maxlength='100' id='nomT' value='' />
                </div>
               

                <div class='ui-field-contain'>
                    <label for='rueT'>Rue</label>
                    <input type='text' name='rueT' id='rueT' value='' />
                </div>

                <div class='ui-field-contain'>
                    <label for='villeT'>Ville</label>
                    <input type='text' name='villeT' id='villeT' value='' />
                </div>
                
                <div class='ui-field-contain'>
                    <label for='codePT'>Code postal</label>
                    <input type='number' name='codePT' id='codePT' value='' />
                </div>
                
            <fieldset>
            <button type="submit" value="Save" >Sauvegarder le theatre</button>
        </form>


