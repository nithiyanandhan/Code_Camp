<?php

function selectionne_membre($pseudo)
{
	$req = "SELECT * FROM identification WHERE pseudo='$pseudo'";
	$resultat = mysql_query($req);
	return $resultat;
}

?>