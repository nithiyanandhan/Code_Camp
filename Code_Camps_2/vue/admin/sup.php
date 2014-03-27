<?php
	echo "test";

	if (isset($_GET['nom_entreprise']) && $_GET['nom_entreprise'] != NULL)
	{	
		echo "fonction";
		$get = $_GET['nom_entreprise'];
		echo $get;
		//$req2="DELETE * FROM identification WHERE id_membre='$get'";
		$req2 = "DELETE * FROM `code_camp`.`identification` WHERE `identification`.`id_membre` = '$get'"
		mysqli_query($req2);
		header("Location:gestion_compte.php");

	}

?>