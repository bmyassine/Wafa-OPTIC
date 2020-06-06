<?php
include "../../entities/commentaire.php";
include "../../core/commentaireC.php";
session_start();

if(isset($_SESSION['id']) and isset($_POST['commentaire'])){
	$commentaire = new commentaire(NULL,$_SESSION['id'],$_POST['commentaire']);
	$gestion_commentaire= new commentaireC();
	$gestion_commentaire->ajoutercommentaire($commentaire);
	header('Location: discussion.php');

}
?>