<?php
	echo("<form method='post' rel='external'  onsubmit='return checkFormP();'>");
	echo "<a rel=\"external\" href=\"javascript:deleteEntryP($idP)\">Supprimer cette saisie</a>";
	echo "<input type='hidden' name='action' value='updateP'/>";
        var_dump($contact);
        
        echo "<input type='hidden' name='idP' value='".$contact->getIdP()."' />";
	echo "<fieldset>";
        
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nomP'>Nom</label>";
	echo "<input type='text' name='nomP' maxlength='100' id='nomP' value='".$contact->getNomP()."' />";
	echo "</div>";
        
        echo "<div data-role='fieldcontain'>";
	echo "<label for='dateP'>Date de sortit</label>";
	echo "<input type='date' name='dateP' maxlength='200' id='dateP' value='".$contact->getDateP()."' />";
	echo "</div>";
        
         echo "<div data-role='fieldcontain'>";
	echo "<label for='realisateurP'>Réalisateur</label>";
	echo "<input type='text' name='realisateurP' maxlength='200' id='realisateurP' value='".$contact->getRealisateurP()."' />";
	echo "</div>";
        
	echo "<fieldset>";
	echo "<button type=\"submit\" value=\"Save\">Sauvegarder</button>";	
	echo("</form>");
?>
