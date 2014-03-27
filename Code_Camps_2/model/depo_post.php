<?php
function insert_post($tuteur,$entreprise,$titre,$theme,$prix_def,$post,$date)
{
	if(!empty($post) && !empty($titre) && !empty($theme) )
	{
		$req="INSERT INTO article (tuteur,entreprise,titre,theme,prix_def,defi,date_creation) VALUES ('$tuteur','$entreprise','$titre','$theme','$prix_def','$post','$date')";
		mysql_query($req) or die(mysql_error());
		return true;
	}
	else
	{
		return false;
	}
}
?>