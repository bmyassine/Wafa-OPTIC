<?php
    session_start();
	include "../config.php";
include "../entities/livraison.php";
include "../core/livraison_core.php";
 	if ( isset($_POST['telephone'])and isset($_POST['adresselivraison'])){
 	$livraisonC=new livraison_core();
    $date = new DateTime();
	$interval = new DateInterval('P10D');
	$date->add($interval);
	$datex=$date->format("Y-m-d H:i:s");
	var_dump($datex);
	$livraison=new livraison($_POST['telephone'],$_SESSION['id'],$_SESSION['cmd'],$datex,$_POST['adresselivraison']);

	$livraisonC->ajouter_livraison($livraison);
	
unset($_SESSION['cmd']);
header('Location: ../index.php');
	
}

?>