<?php
include "../config.php";
include "../core/categorie.php";
$c=new config();
$conn=$c->getConnection();
$mouhib=new categorie(2486,22,"aa",12);

if (isset($_POST["Supprimer"]))
{
	$id=(int)$_POST['nom_cat'];
	$mouhib->supprimer($id,$conn);
}

header('LOCATION:scategorie1.php');
?>