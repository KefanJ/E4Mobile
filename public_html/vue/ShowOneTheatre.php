
<?php
	echo("<form method='post' rel='external'  onsubmit='return checkFormT();'>");
	echo "<a rel=\"external\" href=\"javascript:deleteEntryT($idT)\">Supprimer cette saisie</a>";
	echo "<input type='hidden' name='action' value='updateT'/>";
	echo "<input type='hidden' name='idT' value='".$contact->getIdT()."'/>";
        var_dump($contact);
	echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nomC'>Nom</label>";
	echo "<input type='text' name='nomT' maxlength='100' id='nomT' value='".$contact->getNomT()."' />";
	echo "</div>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='adresseT'>Adresse</label>";
	echo "<input type='text' name='adresseT' maxlength='200' id='adresseT' value='".$contact->getAdresseT()."' />";
	echo "</div>";
        echo "<div data-role='fieldcontain'>";
	echo "<label for='idP'>Piece</label>";
	echo "<input type='text' name='idP' maxlength='200' id='idP' value='".$contact->getIdP()."' />";
	echo "</div>";
        echo "<div data-role='fieldcontain'>";
	echo "<label for='dateT'>Date</label>";
	echo "<input type='date' name='dateT' maxlength='200' id='dateT' value='".$contact->getDateT()."' />";
	echo "</div>";
	echo "<fieldset>";
	echo "<button type=\"submit\" value=\"Save\">Sauvegarder</button>";	
	echo("</form>");
?>



