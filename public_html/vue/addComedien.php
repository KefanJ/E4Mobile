<form method='post' rel='external' onsubmit='return checkFormC();'>

      <input type='hidden' name='action' value='insertC'/>
            <input type='hidden' name='idC' value='-1'/>
            <fieldset>
                <div class='ui-field-contain'>
                    <label for='nomC'>Nom du comedien:</label>
                    <input type='text' name='nomC' maxlength='100' id='nomC' value='' />
                </div>
                
              
                <div class='ui-field-contain'>
                    <label for='prenomC'>Prenom du comedien:</label>
                    <input type='text' name='prenomC' id='prenomC' value='' />
                </div>
  
                <div class='ui-field-contain'>
                    <label for='naissanceC'>Date de naissance:</label>
                    <input type='date' name='naissanceC' maxlength='200' id='naissanceC' value='' />
                </div>
                 <div class='ui-field-contain'>
                    <label for='ageC'>Age:</label>
                    <input type='number' name='ageC' maxlength='200' id='ageC' value='' />
                </div>
                
                <div class='ui-field-contain'>
                    <label for='nationaliteC'>Nationalite:</label>
                    <input type='text' name='nationaliteC' maxlength='200' id='nationaliteC' value='' />
                </div>
                
               
                
              
            <fieldset>


            <button type="submit" value="Save"  >Sauvegarder le comedien</button>
        </form>


