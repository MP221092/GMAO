<script type="text/javascript"> //utilisation de javascript
	function ConfirmDelete(id)
{
  var x = window.confirm("Voulez vous vraiment supprimer ce bâtiment ?"); //demande une confirmation
  
  var url = "supprimer_batiment.php?id=" + id;

  if (x)
      window.location.href = url;
  else{
  	return false;
  }
    
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

	echo '<input type="button" onClick="ConfirmDelete('.$reponse['id'].')"  value="Supprimer"></p>';


	
}


?>
