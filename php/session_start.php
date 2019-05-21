<?php
session_start();



if($_SESSION['mdp'] == '1234') //si le mot de passe existe déjà
{
	?><meta http-equiv="refresh" content="0; URL=ajout_technicien_formulaire.php"><?php //pas besoin de se connecter ca va directement sur la page du technicien
}


else{
	?>

	<script type="text/javascript"> //utilisation de javascript
	function afficher() { //fonction affichage si mauvais mot de passe
    	var mot_de_passe = document.getElementById("mdp").value; //récupère la valeur rentrée dans le formulaire html
    	
    	if(mot_de_passe == "1234"){ //test du mot de passe
    		alert("bon mot de passe"); //popup avec message
    	}
    	else{
    		alert("mauvais mot de passe");
    	}
    	
	}
	</script>

	<form>
		<input type="text" value="mot de passe" id="mdp" onclick="javascript:this.value=''">
    	<input type="submit" name="envoyer" value="envoyer" onclick="afficher();">
	</form>

	<?php
}



?>