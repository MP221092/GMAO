<script type="text/javascript"> //utilisation de javascript
	function ConfirmDelete()
{
  var x = window.confirm("Voulez vous vraiment supprimer ce bâtiment ?"); //demande une confirmation
  if (x)
      return true;
  else
    return false;
}

</script>

<?php

try{
	$bdd = new PDO('mysql:dbname=gmao;host=localhost', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}

catch(Exception $e){
	die('Erreur : ' .$e->getMessage());
}

$req = $bdd->query('SELECT * FROM batiment ORDER BY nom');

while($reponse = $req->fetch()){
	

	echo '<p>Bâtiment: ' .$reponse['nom'];

	echo '<a href="supprimer_batiment.php" onclick="ConfirmDelete()">Supprimer</a>';


	
}


?>