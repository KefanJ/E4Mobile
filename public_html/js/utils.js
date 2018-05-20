function checkFormC() {
	try {
		if ($.trim($('#nomC').val()) == "" ||
                        $.trim($('#prenomC').val()) == "" ||
                        $.trim($('#nationaliteC').val()) == "" ||
                        $.trim($('#naissanceC').val()) == "")
			 {
				alert("Tous les champs sont obligatoire");
				return false;
			}
	} catch (e) {
        
		alert(e);
		return false;
	}
	return true;
}
function checkFormP() {
	try {
		if ($.trim($('#nomP').val()) == "" ||
                        $.trim($('#dateP').val()) == "" ||
                        $.trim($('#realisateurP').val()) == ""){
				alert("Tous les champs sont obligatoire");
				return false;
			}
	} catch (e) {
        
		alert(e);
		return false;
	}
	return true;
    }
    
  function checkFormCP() {
	try {
		if ($.trim($('#idcom').val()) == "" ) {
				alert("Tous les champs sont obligatoire");
				return false;
			}
	} catch (e) {
        
		alert(e);
		return false;
	}
	return true;
}





function checkFormT() {
	try {
		if ($.trim($('#nomT').val()) == "" ||
                        $.trim($('#rueT').val()) == "" ||
                        $.trim($('#villeT').val()) == "" ||
                        $.trim($('#codePT').val()) == ""){
				alert("Tous les champs sont obligatoire");
				return false;
			}
	} catch (e) {
        
		alert(e);
		return false;
	}
	return true;
    }
    
function deleteEntryC(idC) {
	try {
		var confirmString = "Supression d'un comedien.  Confirmez-vous ?\n";
		if (window.confirm(confirmString)) {
			window.location="index.php?action=deleteC&idC=" + idC;
		}
	} catch (e) {
		alert(e);
		return false;
	}
	return true;

}



function deleteEntryP(idP) {
	try {
		var confirmString = "Supression d'une pièce.  Confirmez-vous ?\n";
		if (window.confirm(confirmString)) {
			window.location="index.php?action=deleteP&idP=" + idP;
		}
	} catch (e) {
		alert(e);
		return false;
	}
	return true;

}

function deleteEntryCP(idCom) {
	try {
		var confirmString = "Supression d'un comedien.  Confirmez-vous ?\n";
		if (window.confirm(confirmString)) {
			window.location="index.php?action=deleteCP&idCom=" + idCom;
		}
	} catch (e) {
		alert(e);
		return false;
	}
	return true;






}
function deleteEntryT(idT) {
	try {
		var confirmString = "Supression d'un theatre.  Confirmez-vous ?\n";
		if (window.confirm(confirmString)) {
			window.location="index.php?action=deleteT&idT=" + idT;
		}
	} catch (e) {
		alert(e);
		return false;
	}
	return true;

}