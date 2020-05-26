<?php
include "../configz.php";
include "../core/produit.php";
$c=new configz();
$conn=$c->getConnection();
$e=new produit(2486,"aa","IBM","noir","ordinateur",55,"2019-05-20");
if(isset($_POST['Ajouter']))
{
$myDate = date('Y-m-d H:i:s',time());
$soi=new produit($_POST['codeProd'],$_POST['image'],$_POST['nom'],$_POST['id_cat'],$_POST['typee'],$_POST['prix'],$myDate);
$soi->ajouter($soi,$conn);
}

header('LOCATION:ajoutp1.php');
?>