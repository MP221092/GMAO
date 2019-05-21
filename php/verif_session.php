<?php

session_start();


if(  $_SESSION['mdp'] != '1234');
{
	die("Accès interdit, veuillez vous connecter");
	?><meta http-equiv="refresh" content="5; URL=../html/accueil.html"><?php
}

?>