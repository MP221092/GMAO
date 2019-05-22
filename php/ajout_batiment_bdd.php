<?php

	try{

		$bdd = new PDO("mysql:host=localhost;dbname=gmao", 'root','', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}

	catch(Exception $e){
		
		die("Erreur: ".$e->getMessage());
	}

	$req = $bdd->query('SELECT * FROM batiment');

	$existe_deja = 0;

	while($reponse = $req->fetch()){

		if($reponse['nom'] ==  strtolower($_POST['nom']) ){
			$existe_deja = 1;
		}
	}


	if($existe_deja == 1){
		echo 'Le batiment ' .$_POST['nom']. " existe déjà";
		?><br><meta http-equiv="refresh" content="5; URL=ajout_batiment_formulaire.php">Redirection vers formulaire dans 5 secondes<?php
	}

	else{
		$prep = $bdd->prepare('INSERT INTO batiment(nom) VALUES (:nom)');
		
		$prep->execute(array(
		'nom' => strtolower($_POST['nom']) 
		));


		echo '<list>' .strtolower($_POST['nom']).' a été ajouté</list>';

		?><br><meta http-equiv="refresh" content="5; URL=ajout_batiment_formulaire.php">Redirection vers formulaire dans 5 secondes<?php //renvoie sur le forumair
	}

?>