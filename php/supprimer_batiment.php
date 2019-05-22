<?php

try{
	$bdd = new PDO('mysql:dbname=gmao;host=localhost', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e){
	die('Erreur : ' .$e->getMessage());
}

$req = $bdd->query('DELETE FROM batiment WHERE id =' .$_GET['id']);

?>

<meta http-equiv="refresh" content="0; URL=afficher_batiment.php">