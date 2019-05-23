<?php

$bdd = new PDO('mysql:dbname=gmao;host=localhost', "root","");



if($_POST['etage'] == '' OR $_POST['batiment'] == ""){

	?><meta http-equiv="refresh" content="0; URL=ajout_bon_formulaire.php?err=1"><?php
}

else{

	$prep = $bdd->prepare("INSERT INTO bon(nom, prenom ,batiment, etage, localisation, description) VALUES (:nom, :prenom,:batiment,:etage,:localisation,:description)");

	$prep->execute(array(
		'prenom' => strtolower($_POST['prenom']),
		'nom' => strtoupper($_POST['nom']),
		'batiment' => $_POST['batiment'],
		'etage' => $_POST['etage'],
		'localisation' => $_POST['localisation'],
		'description' => $_POST['description'] 
		));

	?><meta http-equiv="refresh" content="0; URL=ajout_bon_formulaire.php?err=0"><?php
}


?>