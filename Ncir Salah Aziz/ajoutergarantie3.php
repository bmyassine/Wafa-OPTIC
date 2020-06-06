<?PHP
session_start ();  
 
// On récupère nos variables de session
if (isset($_SESSION['id']))
{ 


}

else { 
  header('Location:/fourat/Fourat/views/front/login-register.php');

}  
include "../../../Core/garantieC.php";

include "C:/xampp/htdocs/Fourat/Fourat/entities/garantie.php";
include "C:/xampp/htdocs/Fourat/Fourat/core/garantieC.php";



if (isset($_POST['date'])  and isset($_POST['subject']) and ( strtotime ($_POST['date']) < strtotime('now') ) and isset($_POST['userid'])){
    $date= date_create()->format('Y-m-d');
    
    $garantie1=new garantie($date,$_POST['date'],$_POST['subject'],"en attente",$_POST['userid'],$_SESSION['id']);
    $garantie1C=new garantieC();
    $garantie1C->ajoutergarantie($garantie1);
    $username = 'ncir2772';
$password = 'Azerty123';
$messages = array(
  array('to'=>'+21655568071', 'body'=>'Hello World!')
);  
function send_message ( $post_body, $url, $username, $password) {
    $ch = curl_init( );
    $headers = array(
    'Content-Type:application/json',
    'Authorization:Basic '. base64_encode("$username:$password")
    );
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt ( $ch, CURLOPT_URL, $url );
    curl_setopt ( $ch, CURLOPT_POST, 1 );
    curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
    curl_setopt ( $ch, CURLOPT_POSTFIELDS, $post_body );
    // Allow cUrl functions 20 seconds to execute
    curl_setopt ( $ch, CURLOPT_TIMEOUT, 20 );
    // Wait 10 seconds while trying to connect
    curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 10 );
    $output = array();
    $output['server_response'] = curl_exec( $ch );
    $curl_info = curl_getinfo( $ch );
    $output['http_status'] = $curl_info[ 'http_code' ];
    $output['error'] = curl_error($ch);
    curl_close( $ch );
    return $output;
  } 
$result = send_message( json_encode($messages), 'https://api.bulksms.com/v1/messages?auto-unicode=true&longMessageMaxParts=30', $username, $password );

if ($result['http_status'] != 201) {
  print "Error sending: " . ($result['error'] ? $result['error'] : "HTTP status ".$result['http_status']."; Response was " .$result['server_response']);
} else {
  print "Response " . $result['server_response'];
  // Use json_decode($result['server_response']) to work with the response further
}




  
    //var_dump($rupture);

    header('Location:my-account.php');

}else{
echo "verfier la date";

}


?>
