<?php

	$bdd = new PDO("mysql;host=localhost;dbname=GMAO", "root", ""); //connexion à la base de donnée

	$req = $bdd->query("SELECT * FROM technicien"); //on récupère tout ce qu'il y a dans la table technicien pour vérif si le technicien existe déja

	$existe_deja = 0; //variable de test

	while($reponse = $req->fetch() )
	{
		if(  strtoupper( $_POST['nom']  ) == $reponse['nom'] AND   $_POST['nom'] ==  $reponse['prenom']   ) //verif si prenom et nom existe deja avec majuscul
		{
			$existe_deja = 1; //si on trouve on modifie la variable de test
		}
	}

?>