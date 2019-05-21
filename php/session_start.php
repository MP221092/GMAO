<?php
session_start();
try{
	$_SESSION['mdp'] = $_POST["mdp"];
}
catch(Exception $e){

}



if($_SESSION['mdp'] == '1234') //si le mot de passe existe déjà
{
	?><meta http-equiv="refresh" content="0; URL=../html/service.html"><?php //pas besoin de se connecter ca va directement sur la page du technicien
}


else{
	?>

	<script type="text/javascript"> //utilisation de javascript
	function afficher() { //fonction affichage si mauvais mot de passe
    	var mot_de_passe = document.getElementById("mdp").value; //récupère la valeur rentrée dans le formulaire html
    	
    	if(mot_de_passe == "1234"){ //test du mot de passe
    		 
    	}
    	else{
    		alert("mauvais mot de passe");//popup avec message
    	}
    	
	}
	</script>

	<form action="session_start.php" method="post">
		<input type="text" value="mot de passe" id="mdp" onclick="javascript:this.value=''">
    	<input type="submit" name="envoyer" value="envoyer" onclick="afficher();">
	</form>

	<?php
}



?>