    <style> 
    input[type=password] 
    {
    padding-left: 25%;
    margin-left: 20%;
    width: 50%;
    height: 50%;
    }
    </style>

    <style> 

    .button 
    {
      background-color: #008CBA; /* Green */
      border: none;
      color: white;
      padding: 12px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }

    </style>


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


	<form action="session_start.php" method="post" target="_parent">
		<input type="password" name="mdp"  id="mdp">
    	<input class="button" type="submit" name="envoyer" value="envoyer" onclick="afficher();">
	</form>
 