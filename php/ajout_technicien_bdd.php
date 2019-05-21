<?php

	$bdd = new PDO("mysql;host=localhost;dbname=GMAO", "root", "");

	$req = $bdd->query("SELECT * FROM technicien");

	$existe_deja = 0;

	while($reponse = $req->fetch() )
	{
		if(  strtoupper( $_POST['nom']  ) == $reponse['nom'] AND   $_POST['nom'] ==  $reponse['prenom']   )
		{
			$existe_deja = 1;
		}
	}

?>