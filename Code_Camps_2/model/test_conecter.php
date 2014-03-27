<?php
function test_connecter()
{
	if(!isset($_SESSION['user']))
	{
		return false;
	}
	else
	{
		return true;
	}
}

?>