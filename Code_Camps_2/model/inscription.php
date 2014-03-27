<?php

function inscription()
{
	if(!empty($_POST['nom_entreprise'])  && !empty($_POST['pseudo']) && !empty($_POST['password'])  && !empty($_POST['mail']) && !empty($_POST['adresse'])) 
	{
		if(filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL))
		{
			if($_POST['password'] == $_POST['pwd2'])
			{
				$nom= htmlspecialchars($_POST['nom_entreprise']);
				$pseudo= htmlspecialchars($_POST['pseudo']);
				$password= md5(sha1(md5(htmlspecialchars($_POST['password']))));
				$mail= htmlspecialchars($_POST['mail']);
				$adresse= htmlspecialchars($_POST['adresse']);

				$connect = new mysqli('localhost','root','}XL4N22r', 'code_camp');
				if($connect)
				{	
					$toto = "INSERT INTO identification ( `nom_entreprise` , `mail` , `adresse` , `pseudo` , `password` , `admin`) VALUES (  '$nom', '$mail' , '$adresse'  , '$pseudo' , '$password' , '1')" ;
					$connect->query($toto);
					return TRUE;
				}
			}
		}
		
		else 
		{
			return FALSE;
		}
	}

	else
	{
		return FALSE;
	}
}
?>