<?php
?>
<div id="contenu"> 
<h2>Liste des Visiteurs </h2>
<br>
<table class="table table-striped" border="collaps">
<thead>
<th>Id</th>
<th>nom</th>
<th>prénom</th>
</thead>
<?php

$lesVisiteur=$pdo->getVisiteur();
	foreach ($lesVisiteur as $uneLigne) {
?>
	<tr>	
		<td><?php echo htmlspecialchars ($uneLigne['id'])?></td>
		<td><?php echo htmlspecialchars ($uneLigne['nom'])?></td>
		<td><?php echo htmlspecialchars ($uneLigne['prenom'])?></td>
                <td><a href='index.php?uc=visiteur&action=modifInfo&id=<?php echo $uneLigne['id']?>'>Modifier</a></td>
	</tr>
<?php	
	}
	echo "</table>\n";
?>