<?php
require_once('connexionbdd.php');
require_once('../model/depo_post.php');

echo $_POST['tuteur'];
	$tuteur =  $_POST['tuteur'];
	$entreprise = $_POST['entreprise'];
	$titre = $_POST['titre'];
	$theme = $_POST['theme']; 
	$prix_def = $_POST['prix'];
	$post = $_POST['message'];
	$date = date('Y-m-d H:i:s');	
	$a=insert_post($tuteur,$entreprise,$titre,$theme,$prix_def,$post,$date);
	if($a == true)
	{
		echo "ajouter";
	}	
	else
		echo "non fait";

?>