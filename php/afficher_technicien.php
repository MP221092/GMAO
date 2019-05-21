<?php

try{
	$bdd = new PDO('mysql:dbname=gmao;host=localhost', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e){
	die('Erreur : ' .$e->getMessage());
}

$req = $bdd->query('SELECT * FROM technicien ORDER BY nom');

while($reponse = $req->fetch()){
	//affiche tous les techniciens avec leur NOM et prénom et ajoute un bouton pour les supprimer de la BDD
	////////A AJOUTER///////
	//message de confirmation//
	echo '<p>' .$reponse['nom']. ' '. $reponse['prenom']. ' |  <button ><a  href="supprimer_technicien.php?id='.$reponse['id'].' ">Licencier</a></button></p>';
}


?>