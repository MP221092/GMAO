<?php
session_start();


if($_SESSION['mdp'] == '1234') //si le mot de passe existe déjà
{
	?><meta http-equiv="refresh" content="0; URL=ajout_technicien_formulaire.php"><?php //pas besoin de se connecter ca va directement sur la page du technicien
}


else{
	?>

	<script type="text/javascript">
	function afficher() {
    	var mot_de_passe = document.getElementById("mdp").value;
    	
    	if(mot_de_passe == "1234"){
    		alert("bon mot de passe");
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