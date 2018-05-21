<?php
	echo("<form method='post' rel='external'  onsubmit='return checkFormT();'>");
	echo "<a rel=\"external\" href=\"javascript:deleteEntryT($idT)\">Supprimer cette saisie</a>";
	echo "<input type='hidden' name='action' value='updateT'/>";
        
	echo "<input type='hidden' name='idT' value='".$theatre-> getIdT() ."'/>";
       
	echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nomT'>Nom</label>";
	echo "<input type='text' name='nomT' maxlength='100' id='nomT' value='".$theatre->getNomT()."' />";
	echo "</div>";
        
	echo "<div data-role='fieldcontain'>";
	echo "<label for='rueT'>Rue</label>";
	echo "<input type='text' name='rueT' maxlength='200' id='rueT' value='".$theatre->getRueT()."' />";
	echo "</div>";
        
        echo "<div data-role='fieldcontain'>";
	echo "<label for='villeT'>Ville</label>";
	echo "<input type='text' name='villeT' maxlength='200' id='villeT' value='".$theatre->getVilleT()."' />";
	echo "</div>";
        
        echo "<div data-role='fieldcontain'>";
	echo "<label for='villeT'> Code postal </label>";
	echo "<input type='number' name='codePT' maxlength='200' id='codePT' value='".$theatre->getCodePT()."' />";
	echo "</div>";
        
       
        
	echo "<fieldset>";
	echo "<button type=\"submit\" value=\"Save\">Sauvegarder</button>";	
	echo("</form>"); 
?> 


