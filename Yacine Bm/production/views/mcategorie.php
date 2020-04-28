<?php
include "../config.php";
include "../core/categorie.php";
$c=new config();
$conn=$c->getConnection();


if(isset($_POST['Modifier']))
{
 $id=new categorie ($_POST['nom_cat']);
 $id->modifier($id,$conn);
}

header('LOCATION:mcategorie1.php');
?>