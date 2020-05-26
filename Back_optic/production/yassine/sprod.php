<?php
include "../configz.php";
include "../core/produit.php";
$c=new configz();
$conn=$c->getConnection();
$sp=new produit(2486,"aa","IBM","noir","ordinateur",88,"2019-05-20");

if (isset($_POST["Supprimer"]))
{
	$id=(int)$_POST['codeProd'];
	$sp->supprimer($id,$conn);
}

header('LOCATION:sprod1.php');
?>