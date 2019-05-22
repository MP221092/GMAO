<?php
include 'verif_session.php';


	try{
		$bdd = new PDO("mysql:host=localhost;dbname=gmao", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //connexion à la base de donnée
	}
	catch(Exception $e){
		die('Erreur : ' .$e->getMessage());
	}

	$req = $bdd->query("SELECT * FROM technicien"); //on récupère tout ce qu'il y a dans la table technicien pour vérif si le technicien existe déja

	$existe_deja = 0; //variable de test

	while($reponse = $req->fetch() )
	{
		if(  strtoupper( $_POST['nom']  ) == $reponse['nom'] AND   strtolower($_POST['nom']) ==  $reponse['prenom']   ) //verif si prenom et nom existe deja avec majuscule et si prenom existe déja en minuscule (convention quand je vais les rentrer dans la BDD)
		{
			$existe_deja = 1; //si on trouve on modifie la variable de test
		}
	}

	if($existe_deja == 1) //si la variable a été modif alors le nom est déjà rentré donc mauvais formulaire
	{
		echo '<list>Le technicien que vous avez rentré existe déjà</list>';

		?><br><meta http-equiv="refresh" content="5; URL=ajout_technicien_formulaire.php">Redirection vers formulaire dans 5 secondes<?php //renvoie sur le forumaire
	}

	else
	{
		$prep = $bdd->prepare('INSERT INTO technicien(prenom, nom) VALUES (:prenom,:nom)');
		
		$prep->execute(array(
		'prenom' => strtolower($_POST['prenom']),
		'nom' => strtoupper($_POST['nom']) 
		));


		echo '<list>' .strtolower($_POST['prenom']). ' ' .strtoupper($_POST['nom']) . ' a été ajouté</list>';

		?><br><meta http-equiv="refresh" content="5; URL=ajout_technicien_formulaire.php">Redirection vers formulaire dans 5 secondes<?php //renvoie sur le forumair

	}

?>