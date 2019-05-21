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
		<input type="text" name="mdp" value="mot de passe" id="mdp" onclick="javascript:this.value=''">
    	<input type="submit" name="envoyer" value="envoyer" onclick="afficher();">
	</form>