<?php
include "../config.php";
include "../core/categorie.php";
$c=new config();
$conn=$c->getConnection();
$e=new categorie(50,55,44);
if(isset($_POST['Ajouter'])){

$myDate = date('Y-m-d H:i:s',time());
$soi=new categorie($_POST['nom_cat'],$myDate,$_POST['desc_cat']);
$soi->ajouter($soi,$conn);

}

header('LOCATION:ajouts1.html');
?>