<?php
include "../configz.php";
include "../core/categorie.php";
$c=new configz();
$conn=$c->getConnection();


if(isset($_POST['Modifier']))
{
	$myDate = date('Y-m-d H:i:s',time());

 $id=new categorie ($_POST['nom_cat'],$myDate,$_POST['desc_cat']);
 $id->modifier($id,$conn);
 var_dump($id);
}

header('LOCATION:mcategorie1.php');
?>