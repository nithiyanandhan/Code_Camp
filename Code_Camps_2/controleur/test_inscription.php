<?php

require_once('../model/inscription.php');

$check = inscription();
if ($check == 1) 
{
	header ("location:../vue/inscription_ok.php");
}
else
{
print_r("Erreur Inscription ") ;
}
