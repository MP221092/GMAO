<?php

try{
	$bdd = new PDO('mysql:dbname=gmao;host=localhost', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e){
	die('Erreur : ' .$e->getMessage());
}

$req = $bdd->query('SELECT * FROM batiment ORDER BY nom');

while($reponse = $req->fetch()){
	//affiche tous les techniciens avec leur NOM et prénom et ajoute un bouton pour les supprimer de la BDD
	////////A AJOUTER///////
	//message de confirmation//
	echo '<p>Bâtiment: ' .$reponse['nom']. ' |  <button ><a  href="supprimer_batiment.php?id='.$reponse['id'].' ">Détruire</a></button></p>';
}


?>