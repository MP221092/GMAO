<meta charset="utf-8">
<?php

try{
	$bdd = new PDO("mysql:host=localhost;dbname=gmao", "root", "");
}
catch(Exception $e){
	die("Erreur: " .$e->getMessage());
}

?>
<form action="ajout_bon_bdd.php" method="post">
	
	<div>
	    <label >Nom :</label>
	    <input type="text" name="nom" class="txt" required>
	</div>
	

	<div>
	    <label >Prénom :</label>
	    <input type="text" name="prenom" class="txt" required>
	</div>


	<div>
	<SELECT name="batiment" class="select-css" required>
		<option value="">Choisir bâtiment</option>
		<?php // ajout des options selon les batiments rentrés dans le formulaire
			$req = $bdd->query("SELECT * FROM batiment ORDER BY nom");

			while($reponse = $req->fetch()){
				echo "<option value=".$reponse["nom"].">" .$reponse["nom"].'</option>';
			}

		?>
	</SELECT>
	</div>

	<div>
	<select name="etage" class="select-css" required>
		<option value="">Choisir étage</option>
		<option value="sous sol">sous sol</option>
		<option value="RC">RC</option>
		<option value="1er">1er</option>
		<option value="2e">2e</option>
	</select>
	</div>


	<div>
	    <label >Chambre  / Salle  / Couloir / Bureau :</label>
	    <input type="text" name="localisation"  class="txt" placeholder="exemple: 112 ou couloir" required>
	</div>

	<div>
	    <label >Description du problème:</label>
	    <input type="textarea" name="description" class="desc" cols="100" rows="15" required>
	</div>


	<div class="button">
        <button type="submit">Ajouter</button>
    </div>

</form>

<style>
.txt {
  width: 10%;
  padding: 14px 1px;
  margin: 8px 0;
  box-sizing: border-box;
  
  background-color: #ccccff;
  color: black;
}
input[type=text]:focus {
  border: 3px solid #555;
}

.select-css {
    display: block;
    font-size: 16px;
    font-family: sans-serif;
    font-weight: 700;
    color: #444;
    line-height: 1.3;
    padding: .6em 1.4em .5em .8em;
    width: 100%;
    max-width: 100%; 
    box-sizing: border-box;
    margin: 0;
    border: 1px solid #aaa;
    box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
    border-radius: .5em;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    background-color: #fff;
    background-image: url('data:image/svg+xml;charset=US-ASCII,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%22292.4%22%20height%3D%22292.4%22%3E%3Cpath%20fill%3D%22%23007CB2%22%20d%3D%22M287%2069.4a17.6%2017.6%200%200%200-13-5.4H18.4c-5%200-9.3%201.8-12.9%205.4A17.6%2017.6%200%200%200%200%2082.2c0%205%201.8%209.3%205.4%2012.9l128%20127.9c3.6%203.6%207.8%205.4%2012.8%205.4s9.2-1.8%2012.8-5.4L287%2095c3.5-3.5%205.4-7.8%205.4-12.8%200-5-1.9-9.2-5.5-12.8z%22%2F%3E%3C%2Fsvg%3E'),
      linear-gradient(to bottom, #ffffff 0%,#e5e5e5 100%);
    background-repeat: no-repeat, repeat;
    background-position: right .7em top 50%, 0 0;
    background-size: .65em auto, 100%;
    width: 20%;
}

.desc{

	margin-right: 50%;
	box-sizing: border-box;
	background-color: #ccccff;
  	color: black;
  	word-wrap: break-word:
  	padding-left:500%;
}

form{
	font-size: 20px;
    font-family: sans-serif;
    font-weight: 700;
    color: #444;
}

</style>