<?php
session_start();

$_SESSION['mdp'] = $_POST['mdp'];



if($_SESSION['mdp'] == "1234"){
	?><meta http-equiv="refresh" content="0; URL=../html/service.html"><?php
}

else{
	?><meta http-equiv="refresh" content="0; URL=connexion.php"><?php
}


?>
