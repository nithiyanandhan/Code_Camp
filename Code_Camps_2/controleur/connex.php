
<?php
require_once('connexionbdd.php');
require_once('../model/test_connex.php');

$donnees = selectionne_membre($_POST['pseudo']);
if(mysql_num_rows($donnees)!= 0)
{
	$membre=mysql_fetch_assoc ($donnees);
	if(md5(sha1(md5($_POST['password'])))== $membre['password'])
	{
		foreach($membre as $indice =>$element)
		{
			$_SESSION['user'][$indice] = $element;
		}
		if ($_SESSION['user']['admin']== 1)
		{
			header ("location:../vue/user/validation_conex_user.php");
		}
		else
			header ("location:../vue/admin/validation_conex_admin.php");
	}
	else
	{
		echo "Mot de passe ERRONNE";
	}
}
else{
	echo "Erreur de pseudo";
}

?>