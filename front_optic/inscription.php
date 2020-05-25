<?php
include "entities/client.php";
include "entities/compte.php";
include "entities/cartefid.php";
include "entities/mailing.php";

include "core/compteC.php";
include "core/clientC.php";
include "core/carteC.php";
include_once ("config.php");

$file_name = $_FILES['fileToUpload']['name'];
	$file_tmp_name = $_FILES ['fileToUpload']['tmp_name'];
	$file_dest = 'assets/images/'.$file_name;
	move_uploaded_file($file_tmp_name, $file_dest);
if(!empty ($_POST['id']) and !empty ($_POST['motdepasse']) and !empty ($_POST['cin']) and !empty ($_POST['nom']) and !empty ($_POST['prenom']) and !empty ($_POST['email']) and !empty ($_POST['adresse']) and !empty ($_POST['date_de_naissance']) and !empty($_POST['type'])){
$compte= new compte($_POST['id'],$_POST['motdepasse']);
$client= new client($_POST['cin'],$file_dest,$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['adresse'],$_POST['date_de_naissance']);
$compte->SetType('client');
$carte=new cartefid(0,$_POST['type'],$_POST['cin']);
$gestion_de_compte= new compteC();
$gestion_de_client= new clientC();
$gestion_de_carte= new carteC();

$gestion_de_compte->ajouterCompte($compte);
$gestion_de_client->ajouterClient($_POST['id'],$client);
$gestion_de_carte->ajouterCarte($carte);
//mailing : 
$adresse_email=$_POST['email'];
$message='<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="margin: 0; padding: 0;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%"> 
        <tr>
            <td style="padding: 10px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border: 1px solid #cccccc; border-collapse: collapse;">
                    <tr>
                        <td align="center" colspan="2" bgcolor="white" style="padding: 40px 0 30px 0; color: white; font-size: 28px; font-weight: bold; font-family: Arial, sans-serif;">
                           <img src="https://i.ibb.co/NS3qXDM/logo1.png" alt="logo1" border="0"> 
                        </td>
                    </tr>
                    <tr>
        
                  <td style=" padding : 15px;color: white; font-family: Arial, sans-serif; font-size: 24px; background-color: black;">
                                        <b>Notification d\'inscription ! </b>
                                    </td>
                                    
                  </tr>
                    
                                     <tr>
                                    <td style="padding: 25px; color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 20px; text-align: right">
                                        Cet e-mail a été envoyé à ';
$message.=$adresse_email;
$message.='car vous avez enregistré un compte sur Chasmish.com"
                                    </td>
                                </tr>
                    <tr>
                        <td style="padding: 10px; background-color: black;" colspan="2" >
                        </td>
                    </tr>
</body>
</html>';

$m=new mailing($adresse_email,'Notification d\'inscription',$message);
$m->envoyer();	

header('Location: login-register.php');
}
else 
{
	echo'<script>alert("Vérifier les champs");
    location.assign("login-register.php");
	</script>';
}
?>