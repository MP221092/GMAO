<meta charset='utf-8'>
<?php

$bdd = new PDO('mysql:dbname=gmao;host=localhost', "root","");

$req = $bdd->query("SELECT * FROM bon");

while($reponse = $req->fetch()){

	echo '<p>bon: '.$reponse['id']. ' fait part: ' .$reponse['nom']. ' '.$reponse['prenom']. ' batiment : ' .$reponse['batiment']. ' etage: ' .$reponse['etage']. ' état: ' .$reponse['etat'].'</p>';
}



?>