<?php 
include "../../core/commentaireC.php";
session_start();

if(isset($_GET['id_commentaire']) ){
	$gestion_commentaire= new commentaireC();
	$gestion_commentaire->supprimer($_GET['id_commentaire']);
	header('Location: discussion.php');

}?>