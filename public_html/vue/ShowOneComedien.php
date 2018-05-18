
<?php
	echo("<form method='post' rel='external'  onsubmit='return checkFormC();'>");
	echo "<a rel=\"external\" href=\"javascript:deleteEntryC($idC)\">Supprimer cette saisie</a>";
	echo "<input type='hidden' name='action' value='updateC'/>";
	echo "<input type='hidden' name='idC' value='".$contact->getIdC()."'/>";
        var_dump($contact);
	echo "<fieldset>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='nomC'>Nom</label>";
	echo "<input type='text' name='nomC' maxlength='100' id='nomC' value='".$contact->getNomC()."' />";
	echo "</div>";
	echo "<div data-role='fieldcontain'>";
	echo "<label for='prenomC'>Prenom</label>";
	echo "<input type='text' name='prenomC' maxlength='200' id='prenomC' value='".$contact->getPrenomC()."' />";
	echo "</div>";
        echo "<div data-role='fieldcontain'>";
	echo "<label for='naissanceC'>Date de naissance</label>";
	echo "<input type='date' name='naissanceC' maxlength='200' id='naissanceC' value='".$contact->getNaissanceC()."' />";
	echo "</div>";
        echo "<div data-role='fieldcontain'>";
	echo "<label for='ageC'>Age</label>";
	echo "<input type='text' name='ageC' maxlength='200' id='ageC' value='".$contact->getAgeC()."' />";
	echo "</div>";
         echo "<div data-role='fieldcontain'>";
	echo "<label for='nationaliteC'>Nationalite</label>";
	echo "<input type='text' name='nationaliteC' maxlength='200' id='nationaliteC' value='".$contact->getNationaliteC()."' />";
	echo "</div>";
	echo "<fieldset>";
	echo "<button type=\"submit\" value=\"Save\">Sauvegarder</button>";	
	echo("</form>");
?>


