<?PHP

include "C:/wamp64/www/Fourat/Fourat/entities/reclamatio.php";
include "C:/wamp64/www/Fourat/Fourat/core/reclamatioC.php";
//include "../Core/sms.php";

if (isset($_POST['num']) and isset($_POST['subject']) and isset ($_POST['message']) )
{
    $date= date_create()->format('Y-m-d');
   
$reclamatio1=new reclamatio($date,$_POST['num'],$_POST['subject'],$_POST['message'],"en attente");
$reclamatio1C=new reclamatioC();
$reclamatio1C->ajouterreclamatio($reclamatio1);
header('Location:cart.php');

//	header('Location:('Location:cart.php');
   // header('Location: reclamatio_produit.php');
   
    /*header('Location: ajouterreclamatio.php');*/

}else{
  
    echo "vérifier les champs";}
    $header="MIME-Version: 1.0\r\n";
$header.='From:"Opticien Esprit"<Esprit.tn>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';
$message='
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
                                        Cet e-mail a été envoyé à Ncir Aziz ';

$message.='
En accédant à ce service, le client a lassurance que son problème sera traité dans les meilleurs délais et en priorité selon le niveau durgence de son Reclamation. "
                                    </td>
                                </tr>
                    <tr>
                        <td style="padding: 10px; background-color: black;" colspan="2" >
                        </td>
                    </tr>
</body>
</html>';


mail("nciraziz@gmail.com", "Reclamation!", $message, $header);


//$username = '26623988';
//$password = 'Azerty123';
//$messages = array(
//array('to'=>'+21652812423', 'body'=>'votre demande a été effectuer'),
//);
//$result = new sms();
//$result->send_message( json_encode($messages), "https://api.bulksms.com/v1/messages", $username, $password );
    
?>