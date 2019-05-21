<?php
include 'verif_session.php';
?>


<form action="ajout_technicien_bdd.php" method="post">
	<div>
	    <label >Nom :</label>
	    <input type="text" name="nom" required>
	</div>
	<div>
	    <label >Prénom :</label>
	    <input type="text" name="prenom" required>
	</div>
	<div class="button">
        <button type="submit">Ajouter</button>
    </div>

</form>